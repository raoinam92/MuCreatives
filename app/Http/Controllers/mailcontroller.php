<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailcontroller extends Controller
{
    public function send()
        {
            Mail::send(['text'->'mail'],['name','bilal'],function($message){
            $message->to('meeoown@gmail.com','billy')->subject('Test email');
            $message->from('bilal.ahmad.354@gmail.com','bilal');
            });
        }
}
