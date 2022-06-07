<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Review;

class ReviewsController extends Controller
{
    public function getReviews($rating_value = null){
        if($rating_value){
            $reviews = Review::where("rating_value", "LIKE", "$rating_value")->get();
        }else{
            $reviews = Review::all();
        }
        return response()->json([
            "status" => "success",
            "reviews" => $reviews
        ]);
    }

    public function addReview(Request $request){
        $review = new Review;
        $review->review_text = $request->review_text;
        $review->user_id = $request->user_id;
        $review->restaurant_id = $request->restaurant_id;
        $review->rating_value = $request->rating_value;
        $review->save();

        return response()->json(["status" => "success"], 200);
    }
}
