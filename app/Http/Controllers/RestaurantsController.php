<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Restaurant;


class RestaurantsController extends Controller
{
    public function getRestaurants($id = null){
        //check if route parameter is sent by the front-end
        if($id){
            $restos = Restaurant::find($id);
        }else{
            $restos = Restaurant::all();
        }

        return response()->json([
            "status" => "sucess",
            "restos" => $restos
        ], 200);
    }

    //get restaurants by name
    public function getRestaurantsByName($name){
        $resto = Restaurant::where("name","LIKE", "%$name%")->get();
        
        return response()->json([
            "status" => "Success",
            "results" => $resto
        ], 200);
    }

    public function addResto(Request $request){
        $resto = new Restaurant;
        $resto->name = $request->name;
        $resto->category = $request->category;
        $resto->location = $request->location;
        $resto->number = $request->number;
        $resto->save();
        
        return response()->json(["status" => "success"], 200);
    }
}
