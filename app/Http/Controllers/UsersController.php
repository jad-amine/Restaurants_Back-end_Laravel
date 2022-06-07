<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Users;

class UsersController extends Controller
{
    public function getUsers(){
        $users = Users::all();
        return $users;
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