<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Reviews;

class ReviewsController extends Controller
{
    public function getReviews(){
        $reviews = Reviews::all();
        return $reviews;
    }
}
