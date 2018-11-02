@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    
    <div class="panel-heading">
        
       Edit blog settings
        
    </div>    

<div class="panel-body">

 <form action="{{ route('settings.update') }}"  method="post">
        
         {{  csrf_field() }}
            
            <div class="form-group">  
            <label for="name" >site name</label>
            <input type="text" name="sitename" value="{{$settings->sitename}}" class="form-control">  
            </div>
          <div class="form-group">  
            <label for="address" >Address</label>
            <input type="text" name="address" value="{{$settings->address}}" class="form-control">  
            </div>
         <div class="form-group">  
            <label for="contactemail" >contactemail</label>
            <input type="text" name="contactemail" value="{{$settings->contactemail}}" class="form-control">  
            </div>
         <div class="form-group">  
            <label for="contactnumber" >contactnumber</label>
            <input type="text" name="contactnumber" value="{{$settings->contactnumber}}" class="form-control">  
            </div>
            
            <div class="form-group">
                
                <button class="btn btn-success" type="submit" > Update site settings </button>
                
            </div>    
            
        </form>
</div>
</div>

        
        
        
        
@endsection

