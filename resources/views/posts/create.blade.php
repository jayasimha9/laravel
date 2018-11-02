@extends('layouts.app')

@section('content')



  <h1>create</h1>
  
   {!! Form::open(['action'=>'posstcontroller@store','files' => true, 'method'=>'post']) !!}
   
<!--   <form action='/post/store' method="post">-->
   
   <div class="form-group">
       
<!--       
       <label for="title" >Title</label>
       <input type="text" name="title" class="form-control">-->
       
       {{Form::label('title','Title')}}
       {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
       
       
   </div>
  
    <div  class="form-group">
    
    
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control">
    
    
    </div>
        
   



   <div class="form-group">
       
       {{Form::label('body','Body')}}
       {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'BodyText'])}}
       
       
   </div>

   <div class="form-group">
    
       <label for="category" > Select a category </label>
       <select  name="category_id" id="category" class="form-control"  >
           
           @foreach($categories as $category)
           
           <option>{{$category->id}} </option>
           
           @endforeach
           
           
           
           
       </select>    
    
   </div> 
   
<!--<button class="btn btn-success" type='submit'>
    submit
</button>-->



   {{Form::submit('submit',['class'=>'btn btn-primary'])}}
   
   
  
{!! Form::close() !!} 
   
@endsection

@section('styles')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
@endsection

@section('scripts')
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<script>
    $(document).ready(function() {
        $('#Body').summernote();
    });
    
</script>    
@endsection


