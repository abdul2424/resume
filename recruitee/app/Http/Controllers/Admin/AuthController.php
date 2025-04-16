<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {


 
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
   
        if (Auth::guard('admin')->attempt($credentials, $request->filled('remember'))) {
            return redirect()->route('dashboard');
        }

        // If failed, redirect back with an error message
        return redirect()->back()
            ->withInput($request->only('email'))
            ->withErrors(['email' => 'Invalid credentials or unauthorized access.']);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
