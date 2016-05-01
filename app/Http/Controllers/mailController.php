<?php

namespace App\Http\Controllers;

use Request;
use Mail;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class mailController extends Controller
{
  public function sendMail(){

               Mail::send('emailView',['text' => Request::get('text')], function ($message) {
                   $message->from('do-not-reply@mymail.com', 'EmailDemo');
                   $message->to(Request::get('email'))->subject('mailDemo');
               });
               Session::flash('message', 'This is a message!');
               return redirect('/index');
  }
}
