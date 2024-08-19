<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
      public function adminPage()
    {
        $users = User::get();
        return view('admin.dashboard.dashboardPage',compact('users'));
    }




}
