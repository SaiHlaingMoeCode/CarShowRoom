<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //admin list
    public function adminList(){
        $adminList=User::where('role','admin')->orderBy('id','asc')->paginate(10);
        return view('admin.customer.adminList',compact('adminList'));
    }

    //user list
    public function userList(){
        $userList=User::where('role','user')->orderBy('id','asc')->paginate(10);
        return view('admin.customer.userList',compact('userList'));
    }

    //delete user
    public function deleteUser($id){
        User::where('id',$id)->delete();
        return back()->with(['deleteSuccess'=>' Deleted Successfully.']);
    }

    //change role
    public function changeRole(Request $request,$id){
        $user = User::find($id);
        if ($user) {
            $user->role = $request->role;
            $user->save();

            return back()->with(['changeSuccess'=>'Role updated successfully.']);
        }
    }
}
