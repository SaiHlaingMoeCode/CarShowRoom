<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('login');
    }

    public function registerPage()
    {
        return view('register');
    }

    //  direct dashboard
    public function dashboard(){
        if (Auth::user()->role =="admin") {
            return redirect()->route('admin#dashboard');  // Redirect to the admin dashboard
        }
        return redirect()->route('user#home');  // Redirect to the user home page
    }
}
