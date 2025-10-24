<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        //* Validate
        $request->validate([
            'name' => ['required', 'max:225'],
            'email' => ['required', 'email', 'max:225', "unique:users"],
            'password' => ['required', 'confirmed']
        ]);

        //* Register


        //* Login


        //* Redirect


    }
}
