

@extends('layouts.app')

@section('content')

        
        <form action="{{ route('category.store') }}"  method="post">
        
         {{  csrf_field() }}
            
            <div class="form-group">  
            <label for="name" >Name</label>
            <input type="text" name="name" class="form-control">  
            </div>
            
            <div class="form-group">
                
                <button class="btn btn-success" type="submit" > store category </button>
                
            </div>    
            
        </form>
        
        
        
        
@endsection