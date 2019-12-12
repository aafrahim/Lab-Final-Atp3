<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    function index(){
    	return view('registration.index');
    }

    function store(Request $request){
    	$user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password =$request->password;
        $user->usertype =$request->usertype;
        $user->email =$request->email;
        $user->phone =$request->phone;
        $user->address =$request->address;

        if($user->save()){
            return redirect()->route('login.index');
        }else{
            return redirect()->route('registration.index');
        }
    }
}
