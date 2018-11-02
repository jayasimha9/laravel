<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    public function basic_email(){
      $data = array('name'=>"rajujayasimha");
   
      Mail::send(['text'=>'mail'], $data, function($message) {
         $message->to('rajujayasimha@gmail.com', 'to rajujayasimha')->subject
            ('Laravel Basic Testing Mail');
         $message->from('rajujayasimha@gmail.com','rajujayasimha');
      });
      echo "Basic Email Sent. Check your inbox.";
   }
}
