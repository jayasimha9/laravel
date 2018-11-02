@extends('layouts.app')

@section('content')

@if(count($categories)>0)

<table class="table table-hover">
    <tbody>
   @foreach($categories as $category)
    
   <tr>
       
       <td>
      {{ $category->name }}
       </td>

       <td>
           
           <a href="{{route('category.edit',['id' => $category->id])}}" class="btn btn-xs btn-info">
               
<!--               <span class="glyphicon glyphicon-pencil" ></span>
               -->
               
               Edit
               
           </a>    
           
       </td>
       
         <td>
           
           <a href="{{route('category.delete',['id' => $category->id])}}" class="btn btn-xs btn-danger">
               
               Delete
               
           </a>    
           
       </td>
       
   </tr>
   
    @endforeach
</tbody>
</table>
@endif


@endsection
