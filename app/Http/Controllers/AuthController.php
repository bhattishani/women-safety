<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function login(Request $request){
        if($request->method()=="GET"){
            return view("login");
        }
        if(Auth::attempt(["email"=>$request->email,"password"=>$request->password])){
            if(Auth::user()->is_admin){
                return redirect()->route("dashboard")->with("message", "Logged in successfully");
            }
            return redirect()->route("home")->with("message", "Logged in successfully");
        }
        return redirect()->back()->with("message", "Invalid login");
    }
    function register(Request $request){
        if($request->method()=="GET"){
            return view("register");
        }
        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);
        Auth::login($user);
        return redirect()->route("home")->with("message","Account created successfully");
    }
    function logout(){
        Auth::logout();
        return redirect()->route("home")->with("message","Logged out successfully");
    }
}
