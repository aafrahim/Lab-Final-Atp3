<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class AdminController extends Controller
{
    function profileView($id){
    $user = User::find($id);
    return view('user.profileView')->with('user', $user);
   }

   function userlist(){
    $user = User::all();
    return view('user.userlist')->with('users', $user);
   }

   function delete($id){

        $user = User::find($id);
        if($user->delete())
        {
        	return redirect()->route('admin.userlist');
        }
    }
}
