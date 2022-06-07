<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Restaurant;


class RestaurantsController extends Controller
{
    public function getRestaurants(){
        $restos = Restaurant::all();
        return $restos;
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
