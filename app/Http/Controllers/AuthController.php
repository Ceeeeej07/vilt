<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        //* Validate
        $field = $request->validate([
            'name' => ['required', 'max:225'],
            'email' => ['required', 'email', 'max:225', "unique:users"],
            'password' => ['required', 'confirmed']
        ]);

        //* Register
        $user = User::create([
            'name' => $field['name'],
            'email' => $field['email'],
            'password' => Hash::make($field['password']),
        ]);

        //* Login
        Auth::login($user);


        //* Redirect
        return redirect()->route('home');
    }
}
