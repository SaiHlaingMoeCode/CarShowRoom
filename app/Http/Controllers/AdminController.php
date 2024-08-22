<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
      public function adminPage()
    {
        $users = User::get();
        return view('admin.dashboard.dashboardPage',compact('users'));
    }

    //profile page
    public function profile(){
        return view('admin.profile.adminProfile');
    }

    //edit profile page
    public function editProfilePage(){
        return view('admin.profile.editProfile');
    }

    //update profile
    public function updateProfile(Request $request){
        $this->updateProfileValidation($request);
        User::where('id',$request->userId)->update([
            'name'=>$request->name,
            'email'=>$request->email,
        ]);
        return redirect()->route('admin#profile')->with(['updateSuccess'=>'Updated Successfully!']);
    }

    //profile update validation
    private function updateProfileValidation(Request $request){
        Validator::make($request->all(),[
           'name'=>'required',
           'email'=>'required',
        ])->validate();
    }




}
