<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //direct user home page
    public function home(){

        return view('user.home.home');
    }

    //user profile page
    public function userProfile(){
        return view('user.profile.userProfile');
    }

    //user edit profile page
    public function editProfilePage(){
        return view('user.profile.editProfile');
    }

    //user update profile
    public function updateProfile(Request $request){
        User::where('id', $request->userId)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect()->route('user#profile')->with(['updateSuccess' => 'Updated Successfully!']);
    }
}
