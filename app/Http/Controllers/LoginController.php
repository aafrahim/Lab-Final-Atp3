<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Car;
use App\Catagorie;

class LoginController extends Controller
{
    function index(){
    	return view('login.index');
    }

    function verify(Request $request){
    	$user = User::where('userName', $request->userName)
    				->where('password', $request->password)
    				->first();

    	if($user != null){
            $request->session()->put('uname', $request->input('userName'));
            $request->session()->put('uid', $request->input('id'));
            $request->session()->put('user', $user);

            return redirect()->route('home.index');

        }else{

            $request->session()->flash('msg', 'invalid username/password');
            return redirect()->route('login.index');
        }
    }
}
