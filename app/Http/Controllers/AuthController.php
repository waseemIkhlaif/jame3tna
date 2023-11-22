<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
class AuthController extends Controller
{
    // Display login form
    public function showLoginForm()
    {
        return view('signIn');
    }

    // Handle login form submission
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            if(Auth::user()->role == 'user'){
                return redirect()->intended('dashboard');
            }else if(Auth::user()->role == 'admin'){
                return redirect('AdminDashboard');
            }
            
        }else{
            return redirect()->route('login')->with('invalid', 'Username or password are invalid! try it again');
        }

        // Authentication failed
        return redirect()->route('login')->with('error', 'Invalid login credentials');
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
