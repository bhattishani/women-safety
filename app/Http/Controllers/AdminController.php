<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\SosAlert;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(Request $request){
        $counts = [
            "users" => User::count(),
            "contacts" => Contact::count()
        ];
        return view("admin.dashboard",['counts'=>$counts]);
    }
    function contacts(Request $request){
        $contacts = Contact::latest()->get();
        return view("admin.contacts",['contacts'=>$contacts]);
    }
    function users(Request $request){
        $users = User::latest()->get();
        return view("admin.users",['users'=>$users]);
    }
    function sosAlertMessage(Request $request){
        if($request->ajax()){
            $sosAlertMessage = SosAlert::where("is_readed",0)->with(['user:id,name'])->latest()->get();
            return response()->json($sosAlertMessage);
        }
        $sosAlertMessage = SosAlert::latest()->get();
        return view("admin.sos-alert-message",['sosAlertMessage'=>$sosAlertMessage]);
    }
    function sosAlertMessageRead(Request $request,$id=null){
        $sosAlertMessage = SosAlert::find($id);
        if($sosAlertMessage){
            $sosAlertMessage->update([
                "is_readed" => 1
            ]);
            return redirect()->back()->with("message","SOS Alert was marked as read");
        }
        return redirect()->back()->with("message","SOS Alert was not found");
    }
    function sosAlertMessageUnRead(Request $request,$id=null){
        $sosAlertMessage = SosAlert::find($id);
        if($sosAlertMessage){
            $sosAlertMessage->update([
                "is_readed" => 0
            ]);
            return redirect()->back()->with("message","SOS Alert was marked as unread");
        }
        return redirect()->back()->with("message","SOS Alert was not found");
    }
}
