<?php

namespace App\Http\Controllers\Front\Account;

use App\Http\Controllers\Controller;
use App\Models\Customer\Customer;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AccountController extends Controller
{
    public function index()
    {

        $title = 'My Account';

        return view('front.myaccount', ['title' => $title]);
    }
    public function register()
    {

        $title = 'Register';

        return view('front.register', ['title' => $title]);
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'phone' => 'required',
            'password' => 'required'
        ]);

        // dd($request);
        // exit;

        // $user = Customer::create([
        Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
        ]);

        // event(new Registered($user));

        return redirect()->back()->with('success', 'Registration successful.');
        // return redirect()->route('myaccount')->with('success', 'Registration successful. You are now logged in.');
    }


    public function login(Request $request)
    {
        $credentials = $request->only('email', 'phone', 'password');

        // dd($credentials);
        // exit;

        if (Auth::guard('customer')->attempt($credentials)) {
            // Authentication was successful
            return redirect()->intended('/')->with('success', 'You are now logged in.');
        } else {
            // Check if it's a guest login attempt
            if ($request->has('guest_login')) {
                // Create a random guest ID
                $guestId = Str::random(10);

                // You may want to store the guest ID in the session or somewhere else for further use
                session(['guest_id' => $guestId]);

                // Proceed with guest login
                Auth::loginUsingId($guestId);

                return redirect()->intended('/');
            } else {
                // Regular login attempt failed
                return redirect()->route('home')->with('error', 'Invalid credentials. Please try again.');
            }
        }
    }

    public function guestlogin(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'phone' => 'required',
            'password' => 'required',
        ]);

        // Check if the phone number already exists
        $existingCustomer = Customer::where('phone', $request->phone)->first();
        if ($existingCustomer) {
            // If phone number exists, return an error
            return redirect()->back()->with('error', 'Phone number already exists. Please log in or use a different phone number.');
        }

        // Create a random guest ID
        $guestId = Str::random(10);

        // Save the guest credentials in the customer table
        Customer::create([
            'guest_id' => $guestId,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        $credentials = $request->only('phone', 'password');

        if (Auth::guard('customer')->attempt($credentials)) {
            // if ($request->has('phone')) {
            // You may want to store the guest ID in the session or somewhere else for further use
            session(['guest_id' => $guestId]);

            // Proceed with guest login
            return redirect()->intended('/')->with('success', 'You are now logged in.');
        } else {
            // Regular login attempt failed
            return redirect()->back()->with('error', 'Invalid credentials. Please try again.');
        }
    }


    public function logout()
    {
        Session::flush();
        Auth::logout();
        // return redirect('auth.login');
        return redirect()->route('home')->with('success', 'Logout successful.');
    }
}
