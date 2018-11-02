<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessioncontroller extends Controller
{
   public function accessSessionData(Request $request){
       
       if($request->session()->has('name'))
           echo $request->session()->get('name');
       else
           echo 'no data';
       
   }
   
   public function storeSessionData(Request $request){
      $request->session()->put('name','jayasimha');
      echo "Data has been added to session";
   }
   public function deleteSessionData(Request $request){
      $request->session()->forget('name');
      echo "Data has been removed from session.";
   }
   
   
   
   
}
