<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginUser()
    {
        return view('auth.login_user');
    }

    public function loginAdmin()
    {
        return view('auth.login_admin');
    }
//
//    public function logout()
//    {
//        if (Auth::check()) {
//            Auth::logout();
//        }
//        return redirect()->route('login');
//    }
//
//    public function register()
//    {
//        return view('auth.register');
//    }
//
//    public function do_register(Request $request){
//        $request->validate([
//            'name'=>'required',
//            'email'=>'required|email',
//            'password'=>'required|confirmed',
//        ]);
//        User::create([
//            'email'=>$request->email ,
//            'name'=>$request->name ,
//            'password'=>Hash::make($request->password)
//        ]);
//
//        return redirect()->route('login')->with('success' , "success registering");
//    }

    public function authenticate(Request $request)
    {
        $log = ['email' => $request->email, 'password' => $request->password];
        if (Auth::attempt($log)) {
            return redirect()->route('indexLogin');
        } else {
            dd($log);
        }
    }}
