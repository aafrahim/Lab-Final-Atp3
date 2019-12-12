<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Car;
use App\Catagorie;

class CarController extends Controller
{
    function add(){
    $catagories = Catagorie::all();
    return view('car.add')->with('catagories', $catagories);
   }

   public function store(Request $request){
        if($request->hasFile('image')){
            $file = $request->file('image');

            $car = new Car(); 
            $car->name = $request->name;
            $car->catagory = $request->catagory;
            $car->details = $request->details;
            $car->price = $request->price;
            $car->image = $file->getClientOriginalName();


            if($file->move('cars', $file->getClientOriginalName()) && $car->save()){
                return redirect()->route('home.index');
            }
        }else{
            echo "fail";
      }
   }

   function carlist(){
    $cars = Car::all();
    return view('car.carlist')->with('cars', $cars);
   }

   function delete($id){

        $car = Car::find($id); 
        if($car->delete())
        {
        	return redirect()->route('car.carlist');
        }
    }
}
