@extends('layouts.app')

@section('content')


  <h2>Sending Email</h2> 
<!--        <form method="post" action="uploadcontroller" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="document">Document:</label>
            <input type="file" class="form-control" name="document">
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Upload</button>
        </div>
    </div>
</form>-->

 {!! Form::open(['url'=>'/mailsent','files'=>true,'method'=>'post']) !!}
 
<!-- {!! Form::open(['action'=>'posstcontroller@store','method'=>'post']) !!}
   -->
   
   <div class="form-group">
       
       {{Form::label('email','Email')}}
       {{Form::text('email','',['class'=>'form-control','placeholder'=>'Email'])}}
       
       
   </div>
   <div class="form-group">
       
       {{Form::label('subject','Subject')}}
       {{Form::textarea('subject','',['class'=>'form-control','placeholder'=>'Subject'])}}
       
       
   </div>
   
 
     {!! Form::file('a_file');!!}
 
   {{Form::submit('submit',['class'=>'btn btn-primary'])}}
   
   
  
{!! Form::close() !!} 


@endsection