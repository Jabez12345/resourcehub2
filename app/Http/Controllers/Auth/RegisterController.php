<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // Show the registration form (this method is required by Laravel's default Auth system)
    public function showRegistrationForm()
    {
        return view('auth.register'); // This points to the registration view
    }

    // Registration method
    public function register(Request $request)
    {
        // Validate the input
        $validated = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'department' => ['required', 'string', 'max:255'],
            'password' => [
                'required',
                'string',
                'min:8', // Minimum 8 characters
                // 'confirmed',
                'regex:/[a-zA-Z]/', // Must contain at least one letter
                'regex:/[0-9]/',     // Must contain at least one number
            ],
        ]);

        try {
            // Attempt to create the new user and save it to the database
            $user = User::create([
                'email' => $request->email,
                'department' => $request->department,
                'password' => Hash::make($request->password), // Hash the password
            ]);

            // Log the user in immediately after registration
            Auth::login($user);

            // Flash a success message
            session()->flash('status', 'Registration successful! Welcome!');

            // Redirect to dashboard or any other page
            return redirect()->route('auth.dashboard');
        } catch (\Exception $e) {
            // Flash an error message if something goes wrong
            session()->flash('error', 'Something went wrong during registration. Please try again.');

            // Redirect back to registration page
            return redirect()->back();
        }
    }
}
