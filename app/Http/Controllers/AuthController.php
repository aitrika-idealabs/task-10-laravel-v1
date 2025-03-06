<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showSignUpForm()
    {
        return view('auth.signup');
    }

    public function signUp(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        // Store user details in session (temporary storage)
        session([
            'user' => [
                'name' => $request->name,
                'email' => $request->email,
            ]
        ]);

        return redirect()->route('dashboard'); // Redirect to dashboard
    }
}
