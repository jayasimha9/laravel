@extends('layouts.app')

@section('content')

<div class="panel panel-default">
  
    <div class="panel-heading">
        
        users
        
    </div>
    
    <div class="panel-body">
        
        <table class="table table-hover">
            
            <thead>
               
            <th>
                Image
                
            </th>
             <th>
               Name
                
            </th>
             <th>
               permissions
            </th>
             <th>
               Delete
                
            </th>
                
      </thead>
            
            
     
          
           <tbody>
   @foreach($users as $user)
    
   <tr>
       
       <td>
     
<!--           <img src="{{ asset($user->profile->avatar) }}" alt="mywish" width="60px" height="60px" >
           -->
           <img src="{{ asset($user->profile->avatar) }}" alt="mywish" width="60px" height="60px"  >
           
       </td>

       <td>
       {{$user->name}}   
       
       </td>
       
         <td>
           
          @if($user->admin)
          
           <a href="{{route('users.notadmin',['id'=>$user->id])}}" class="btn btn-xs btn-danger">Remove Admin</a>

          
          @else
          
          <a href="{{route('users.admin',['id'=>$user->id])}}" class="btn btn-xs btn-success">Make Admin</a>
          @endif
           
       </td>
       <td>
           
         @if(Auth::id() !== $user->id)
         
          <a href="{{route('users.delete',['id'=>$user->id])}}" class="btn btn-xs btn-danger">Delete</a>
         
         @endif
           
           
           
       </td>
       
   </tr>
   
    @endforeach
</tbody>
          
          
  
            
            
            
        </table>    
        
    </div>    
    
    
    
</div>   
  @endsection 