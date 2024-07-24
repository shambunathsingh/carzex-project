<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        // login code
        if (Auth::attempt($request->only('email', 'password'))) {
            // Redirect to the admin dashboard route
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('login')->withErrors('Invalid login details');
    }

    public function register_view()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:Admins',
            'password' => 'required|string|min:6|confirmed'
        ]);

        // Save in Admin table
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // login Admin here
        if (Auth::attempt($request->only('email', 'password'))) {
            // Redirect to the admin dashboard route
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('register')->withErrors('Registration error');
    }

    public function home()
    {
        $title = "Carzex - Dashboard";

        // Add your admin dashboard logic here
        return view('admin.dashboard', ['title' => $title]);
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }
}
