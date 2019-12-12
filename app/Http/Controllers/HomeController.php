<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Car;
use App\Catagorie;

class HomeController extends Controller
{
    function index(Request $request){

    	$catagories = Catagorie::all();
        $cars = Car::all();

    	if($request->session()->has('uname')){
    		return view('home.index')->with('catagories', $catagories)
                                     ->with('cars', $cars);
    	}else{
    		return redirect('/login');
    	}
    }
}



