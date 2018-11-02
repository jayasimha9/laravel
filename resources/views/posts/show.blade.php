@extends('layouts.app')

@section('content')

<div class="btn btn-primary" >
    <a href="/posts" style="color:red">Back</a>
</div>
<h1>{{$posts->title}}</h1>

<img src="{{$posts->image}}" alt="{{$posts->title}}" width="50px" height="50px">
<!--<h3>{{$posts->image}}</h3>-->
<div>
    
    
    {{$posts->body}}
    
</div>

@endsection
