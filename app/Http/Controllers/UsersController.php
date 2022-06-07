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
}
