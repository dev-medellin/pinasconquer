<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Exception;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('pages.register');
    }

    public function register(Request $request)
    {
        // 1. Validation
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|alpha_num|unique:accounts,username|min:4|max:16',
            'password' => 'required|string|confirmed|min:6',
            'email'    => 'required|email|unique:accounts,email',
            // 'g-recaptcha-response' => 'required|captcha', // Uncomment when ready
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            // 2. Data Preparation
            // If your Conquer DB uses MD5, use md5(). If it's plain text, use $request->password.
            // Note: Most private servers use MD5.
            $passwordHash = $request->password; 

            // 3. Create Account
            $account = Account::create([
                'username' => $request->username,
                'Password' => $passwordHash, 
                'email'    => $request->email,
                'IP'       => $request->ip(),
                // If your DB doesn't have defaults, add them here:
                // 'EntityID' => rand(1000000, 9999999), 
                // 'Question' => 'None',
                // 'Answer'   => 'None',
            ]);

            Log::info("New account registered: " . $request->username);

            return redirect()->route('download')->with('success', '🎉 Account created successfully! You can now login.');

        } catch (Exception $e) {
            // This catches "Field 'EntityID' doesn't have a default value" etc.
            Log::error("Registration Failed: " . $e->getMessage());

            return redirect()->back()
                ->withInput()
                ->with('error', 'Database error occurred. Please contact an admin.');
        }
    }
}