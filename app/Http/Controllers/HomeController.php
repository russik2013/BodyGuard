<?php

namespace App\Http\Controllers;

use App\News;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function auth(Request $request){

        $user = User::where('login', $request -> login) -> where('password', md5($request -> password)) -> first();

        if($user){

            $token = str_random(32);

            $user -> remember_token = $token;

            $user -> save();

            return response(['status' => 'success', 'message' => '', 'data' => ['remember_token' => $token]]);

        }else

            return response(['status' => 'client error', 'message' => 'wrong login or password', 'data' => null]);

    }

    public function index(){

        $news = News::orderBy('id', 'desc')->paginate(3);
        $events =  News::where('eventEndTime','>=', Carbon::now()) -> where('event', 1)->orderBy('showCount', 'desc') -> take(3) -> get();

        return view('index',compact('news', 'events'));

    }
}
