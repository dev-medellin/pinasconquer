<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Account;
use Illuminate\Support\Facades\Log;
use Exception;

class LoginController extends Controller
{
    public function show()
    {
        return view('pages.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        try {
            // Find account - using where to ensure case-sensitivity depending on DB collation
            $account = Account::where('username', $request->username)->first();

            // PASSWORD CHECK: 
            // If your game uses MD5, use: if ($account && $account->Password === md5($request->password))
            if ($account && $account->Password === $request->password) {
                
                // Log the user into the session
                Auth::login($account, $request->filled('remember'));
                
                // Critical: Regenerate session ID for security
                $request->session()->regenerate();
                
                // Force save session to ensure Hostinger writes the file before redirect
                $request->session()->save();

                if (Auth::check()) {
                    Log::info("User logged in: " . $account->username . " | Session ID: " . session()->getId());
                    
                    // use intended() to send users back to where they were trying to go
                    return redirect()->intended(route('profile'))->with('success', 'Logged in successfully!');
                } 
                
                Log::error("Session lost immediately for: " . $account->username);
                return back()->withErrors(['error' => 'Session persistence error. Please clear browser cookies.']);
            }

            Log::warning("Failed login attempt for: " . $request->username);
            return back()->withErrors(['username' => 'The provided credentials do not match our records.'])->withInput();

        } catch (Exception $e) {
            Log::error("Login Crash: " . $e->getMessage(), ['trace' => $e->getTraceAsString()]);
            return back()->withErrors(['error' => 'Server error. Please try again later.']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Logged out successfully!');
    }
}