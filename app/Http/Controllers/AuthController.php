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
            return view('admin.dashboard.dashboardPage');  // Redirect to the admin dashboard
        }
        return view('user.home');  // Redirect to the user home page
    }
}
