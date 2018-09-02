<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function send()
    {
        Mail::send(['text' => 'mail'], ['name', 'andrey'], function($message){
            $message->to('nesterov.andrey.a@yandex.ru', 'Hello')->subject('Test email');
            $message->from('nesterov.andrey.a@yandex.ru', 'Hello user');
        });
    }
}
