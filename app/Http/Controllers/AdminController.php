<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

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

    //admin password page
    public function adminPasswordPage(){
        return view('admin.password.adminPassword');
    }

    //admin password change
    public function adminPasswordChange(Request $request){
        $this->passwordValidationCheck($request);
        $dbHashValue = User::where('id', Auth::id())->value('password');

        if(Hash::check($request->oldPassword,$dbHashValue)){
           $data=[
             'password'=>Hash::make($request->newPassword)
           ];
           User::where('id',Auth::user()->id)->update($data);

        //  Auth::logout();
        //  return redirect()->route('auth#loginPage');
        return back()->with(['updateSuccess'=>'Password Changed Successfully!']);
        }
        return back()->with(['notMatch'=>'Old Password does not match!!']);
    }

    //password validation check
    private function passwordValidationCheck(Request $request){
        Validator::make($request->all(),[
             'oldPassword'=>'required|min:6',
             'newPassword'=>'required|min:6',
             'confirmPassword'=>'required|min:6|same:newPassword',
        ])->validate();
    }




}
