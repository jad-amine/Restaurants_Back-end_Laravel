<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Restaurants;

class RestaurantsController extends Controller
{
    function getRestaurants(){
        $restos = Restaurants::all();
        return $restos;
    }
}
