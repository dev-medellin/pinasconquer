<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Account;

class LoginController extends Controller
{
    /**
     * Show the login form
     */
    public function show()
    {
        return view('pages.login');
    }

    /**
     * Handle login request
     */
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $username = $request->username;
        $password = $request->password;

        // Find the account
        $account = Account::where('username', $request->username)->first();

        if ($account && $account->Password === $request->password) {
            // Logs in using username as primary key
            Auth::login($account, $request->filled('remember'));

            $request->session()->regenerate();

            return redirect()->route('profile')->with('success', 'Logged in successfully!');
        }
        
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->withInput();
    }

    /**
     * Logout user
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Logged out successfully!');
    }
}