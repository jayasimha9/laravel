
@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    
    <div class="panel-heading">
        
       Create new user 
        
    </div>    

<div class="panel-body">

 <form action="{{ route('users.store') }}"  method="post">
        
         {{  csrf_field() }}
            
            <div class="form-group">  
            <label for="name" >User</label>
            <input type="text" name="name" class="form-control">  
            </div>
          <div class="form-group">  
            <label for="email" >Email</label>
            <input type="text" name="email" class="form-control">  
            </div>
            
            <div class="form-group">
                
                <button class="btn btn-success" type="submit" > create user </button>
                
            </div>    
            
        </form>
</div>
</div>

        
        
        
        
@endsection