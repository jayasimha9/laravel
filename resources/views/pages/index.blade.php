
<?php

session_start();


?>



<!doctype html>






@extends('layouts.app')

@section('content')
        <h1>Welcome to home page</h1>
        <?php
        
//         $request->post('email');
// 
//         echo $request;
//        echo "jayasimha";
        
        echo  Auth::user()->name ."<br>" ;
        echo  Auth::user()->email ;
        
      //  echo "ur email is".  $_SESSION['email']. ".<br>";
       // echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
        
        ?>
  @endsection  