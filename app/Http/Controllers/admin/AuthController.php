<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    function loginView(){
        return view('admin.login');
    }
    function login(Request $request){
        $v = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
        if($v->fails()){
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
        $email = filter_var($request->email, FILTER_SANITIZE_EMAIL);
        $password = filter_var($request->password, FILTER_SANITIZE_STRING);
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
    }
    function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
