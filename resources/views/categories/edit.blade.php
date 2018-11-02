@extends('layouts.app')

@section('content')

@include('inc.messages')

<div class="panel-heading">
    
    
    Update Category: {{$category->name}}
    
    
    
</div>


 <form action="{{ route('category.update',['id'=>$category->id]) }}"  method="post">
        
         {{  csrf_field() }}
            
            <div class="form-group">  
            <label for="name" >Name</label>
            <input type="text" name="name" value="{{$category->name}}" class="form-control">  
            </div>
            
            <div class="form-group">
                
                <button class="btn btn-success" type="submit" > Update category </button>
                
            </div>    
            
        </form>
        

@endsection