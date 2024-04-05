<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function login(){
       if(!empty(Auth::check())){
        if(Auth::user()->user_type==1){
            return redirect('admin/dashboard');
           }
           else if(Auth::user()->user_type==2){
            return redirect('supervisor/dashboard');
        }
        else if(Auth::user()->user_type==3){
            return redirect('student/dashboard');

        }
       }
        return view('auth.login');
    }
    public function authLogin(Request $request){
   if(Auth::attempt(['email'=> $request->email,'password'=> $request->password])){
    if(Auth::user()->user_type==1){
        return redirect('admin/dashboard');
       }
       else if(Auth::user()->user_type==2){
        return redirect('teacher/dashboard');
    }
    else if(Auth::user()->user_type==3){
        return redirect('student/dashboard');

    }

    }
    else{
        return redirect('')->with('error','please enter correct details');
    }
}
public function logout(){
    Auth::logout();
    return redirect('/');
}
}
