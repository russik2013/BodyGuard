<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CallBackController extends Controller
{
    public function callback(Request $request){

        Mail::send('smallMail', ["user" => $request], function ($message) use ($request) {


            $message->from('us@example.com', 'Bodyguards mail');
            $message->to('office@bodyguards.od.ua', 'Drugak')->subject('Новое сообщение с этого сайта');
            // $message->to('z.kon2009@gmail.com','Drugak')->subject('Welcome to Odessa');
        });

        return json_encode(['result' => 'done']);

    }

    public function callbackForm(){

        return view('callback');

    }
}
