<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function __construct()
    {
        // Apply throttle middleware: max 5 requests per minute for register
        // $this->middleware('throttle:5,1')->only('register');
    }

    /**
     * Show the registration form
     */
    public function showRegistrationForm()
    {
        return view('pages.register-disabled');
    }

    /**
     * Handle registration
     */
    public function register(Request $request)
    {
        // Validate user input
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|unique:accounts,username|min:3|max:20',
            'password' => 'required|string|confirmed|min:6',
            'email'    => 'nullable|email|unique:accounts,email',
            'g-recaptcha-response' => 'required|captcha', // validate reCAPTCHA
        ]);

        if ($validator->fails()) {
            // Return with errors (flash messages will handle displaying)
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }

        // Create new account (MD5 password for Conquer Online)
        $account = Account::create([
            'username' => $request->username,
            'Password' => $request->password, // MD5 hash
            'email'    => $request->email,
            'IP'       => $request->ip(),
        ]);

        // Redirect to login with flashy success message
        return redirect()->route('login')->with('success', '🎉 Account created successfully! You can now login.');
    }
}