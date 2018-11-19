<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Admin;
use Auth;
use Alert;
use Hash;

class loginUsersController extends Controller
{
    public function loginUsers(){
        return view('admin.users.users')->with('users',User::all());
    }

    public function profile($id){
        return view('admin.users.profile')->with('user',Admin::find($id));
    }

    public function profileAvatar(Request $request){
        $avatar =   Auth::user();
        if($request -> avatar){
            $avatar -> avatar = $request -> avatar;
            alert() -> success('Your Avatar is changed')->autoclose(2900);
            $avatar -> save();
            return redirect()->back();
        }
        else
        {
            alert()->error('No Avatar is selected')->autoclose(2900);
            return redirect()->back();
        }

    }

    public function changePassword(Request $request){
        $this -> validate($request, [
            'curPassword'  => 'required',
            'newPassword'  => 'required',
            'confPassword' => 'required'
        ]);

        $user = Auth::user();
        $curPassword  = $request -> curPassword;
        $newPassword  = $request -> newPassword;
        $confPassword = $request -> confPassword;
        if (Hash::check($curPassword, $user->password)) {
            if($confPassword !== $newPassword){
                alert() -> error('Password is not matched')->autoclose(3500);
                return redirect()->back();
            }
            $user->password = Hash::make($newPassword);
            $user->save();
            alert() -> success('Your Password Successfully Changed')->autoclose(2900);
            return redirect()->back();
        }
        else{
            alert() -> error('Current Password is not matched')->autoclose(2900);
            return redirect()->back();
        }
    }

}
