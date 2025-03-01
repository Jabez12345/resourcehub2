<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle the login process
    public function login(Request $request)
    {
        // Validate the input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt($request->only('email', 'password'))) {
            // Redirect to dashboard if login is successful
            session()->flash('login_success', 'Welcome back, ' . Auth::user()->email . '!');
            return redirect()->route('dashboard')->with('status', 'Login successful!');
        }

        // Redirect back with an error message if login fails
        return back()->withErrors(['login_error' => 'Invalid email or password.']);
    }
}

