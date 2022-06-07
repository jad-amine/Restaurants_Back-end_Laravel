<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ReviewsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Restaurants GET
Route::get('/restaurants/{id?}', [RestaurantsController::class, 'getRestaurants']);
Route::get('/search/{name}', [RestaurantsController::class, 'getRestaurantsByName']);

//Restaurant POST
Route::post('/add_resto', [RestaurantsController::class, 'addResto']);

Route::get('/users', [UsersController::class, 'getUsers']);
Route::post('/add_user', [UsersController::class, 'addUser']);

Route::get('/reviews', [ReviewsController::class, 'getReviews']);
Route::post('/add_review', [ReviewsController::class, 'addReview']);

