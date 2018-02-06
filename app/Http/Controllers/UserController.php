<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function read(Request $request){

        $user = User::where('remember_token', $request -> remember_token) -> first();

        if($user){

            return response(['status' => 'success', 'message' => '', 'data' => ['login' => $user -> login]]);

        }else return response(['status' => 'client error', 'message' => 'wrong token', 'data' => null]);

    }

    public function update(Request $request){

        $user = User::where('remember_token', $request -> remember_token) -> first();

        if($user){

            $user -> fill($request -> all());

            $user -> password = md5($request -> password);

            $user -> save();

            return response(['status' => 'success', 'message' => '', 'data' => $user]);

        }else return response(['status' => 'client error', 'message' => 'wrong token', 'data' => null]);

    }


}
