<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth.login'); 
    }
    

    public function store(Request $request)
    {
        // Validate email and password
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt login using Auth facade
        if (Auth::attempt(['email' => $validatedData['email'], 'password' => $validatedData['password']])) {
            // Login successful, redirect with success message
            return redirect('/dashboard')->with('success', 'Login successful!');
        }

        // Login failed, return to login with error message
        return back()->withErrors([
            'message' => 'Invalid credentials. Check the email address and password entered.',
        ]);
    }
}
