<?php

namespace App\Http\Controllers;

use App\Models\SosAlert;
use Illuminate\Http\Request;

class SosHelp extends Controller
{
    function index(Request $request){
        if($request->method()=="POST"){
            if(empty($request->message)){
                return redirect()->back()->with("message", "Message field is required");
            }
            SosAlert::create([
                "user_id"=>auth()->id(),
                "message"=>$request->message
            ]);
            return redirect()->back()->with("message","Message Sent Successfully");
        }
        return view("sos-help");
    }
}
