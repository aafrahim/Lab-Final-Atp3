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

    function profileEdit($id){
    $user = User::find($id);
    return view('user.profileEdit')->with('user', $user);
   }

   function profileUpdate(Request $request, $id){
    $user = User::find($id);
    $user->name = $request->name;
    $user->password = $request->name;
    $user->email = $request->email;
    $user->phone = $request->phone;
    $user->address = $request->address;
    if($user->save()){
      return redirect()->route('admin.profileView', $id);
    }else{
      return redirect()->route('admin.profileEdit', $id);
      }
   }
}
