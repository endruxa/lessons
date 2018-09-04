<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\newMail;
class MailController extends Controller
{
    public function send()
    {
        Mail::send(new newMail());
    }

    public function email()
    {
        return view('email');
    }

}
