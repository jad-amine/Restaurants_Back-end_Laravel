<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Users;

class UsersController extends Controller
{
    public function getUsers($id = null){
        if($id){
            //get user by id
            $users = Users::find($id);
        }else{
            //get all users
            $users = Users::all();
        }

        return response()->json([
            "status" => "success",
            "users" => $users
        ]);
    }

    public function getUsersByName($name){
        $users = Users::where("name", "LIKE", "%$name%")->get();
    
        return response() -> json([
            "status" => "success",
            "users" => $users
        ], 200);
    }

    public function addUser(Request $request){
        $user = new Users;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return response()->json(["status" => "success"], 200);
    }
}