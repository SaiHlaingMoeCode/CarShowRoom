<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
      public function adminPage()
    {
        return view('admin.dashboard.dashboardPage');
    }
}
