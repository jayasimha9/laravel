@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    
    <div class="panel-heading">
        
      Edit your profile
        
    </div>    

<div class="panel-body">

    <form action="{{ route('users.profile.update') }}"  method="post" enctype="multipart/form-data">
        
         {{  csrf_field() }}
            
            <div class="form-group">  
            <label for="name" >UserName</label>
            <input type="text" name="name" value="{{$user->name}}" class="form-control">  
            </div>
          <div class="form-group">  
            <label for="name" >Email</label>
            <input type="email" name="email" value="{{$user->email}}" class="form-control">  
            </div>
          <div class="form-group">  
            <label for="password" >New password</label>
            <input type="password" name="password" class="form-control">  
            </div>
          <div class="form-group">  
            <label for="avatar" >Upload new avatar</label>
            <input type="file" name="avatar" class="form-control">  
            </div>
          <div class="form-group">  
            <label for="email" >Facebook profile</label>
            <input type="text" name="facebook" value="{{$user->profile->facebook}}" class="form-control">  
            </div>
         <div class="form-group">  
            <label for="email" >youtube profile</label>
            <input type="text" name="youtube" value="{{$user->profile->youtube}}" class="form-control">  
            </div>
         <div class="form-group">  
            <label for="email" >About you</label>
            <input type="text" id="about" class="6" rows="6" class="form-control">  
            </div>
            
            <div class="form-group">
                
                <button class="btn btn-success" type="submit" > update profile </button>
                
            </div>    
            
        </form>
</div>
</div>

        
        
        
        
@endsection