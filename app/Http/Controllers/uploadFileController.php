<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Image;
use Storage;

class uploadFileController extends Controller
{
    public function index(){
      return view('uploadfile');
   }
   public function showUploadFile(Request $request){
      $file = $request->file('image');
   
     // echo $file;
      
       $lang = 'french';
      
      $jay = true;
      //Display File Name
      echo 'File Name: '.$file->getClientOriginalName();
      echo '<br>';
   
      //Display File Extension
      echo 'File Extension: '.$file->getClientOriginalExtension();
      echo '<br>';
   
      //Display File Real Path
      echo 'File Real Path: '.$file->getRealPath();
      echo '<br>';
   
      //Display File Size
      echo 'File Size: '.$file->getSize();
      echo '<br>';
   
      //Display File Mime Type
      echo 'File Mime Type: '.$file->getMimeType();
   
//      $url = Storage::url('$file');
//      
//      "<img src='".$url."'/>";
      //Move Uploaded File
//      $destinationPath = 'img/';
//      $file->move($destinationPath,$file->getClientOriginalName());
//      
//      $originalFile = $file->getClientOriginalName();
//      
//      <img src='{{ asset('img/'.$originalFile) }}'>
//    
      
//      $file = Input::file('Picture');
//$imageName = $file->getClientOriginalName();
//
//$imgUpload = Image::make($file)->save(public_path('img/' . $imageName));
//
//<img src="{{ asset('img/'.$imageName) }}">
      
      
     if($request->hasFile('image')){
         $request->file('image');
         
         return  $request->image->storeAs('public','bitfumes.jpg');
         
        
     }
     else
     {
         return 'not';
         
     }
     
   
      
     return view('/shows');
     
   }
   
   public function show(){
       
       
       $url = Storage::url('bitfumes.jpg');
       
       return "<img src='".$url."'/>";
       
       $jay = false;
       
       
   }

}


?>
<html>


    
    <body>
        
        
        
        <button onclick="location.href='/shows'" >show uploaded image</button>
        <br>
        
    </body>

</html>