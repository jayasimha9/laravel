@extends('layouts.app')

@section('content')

@if(Session::has('success'))

<div class="alert alert-success" role='alert'>
    {{Session::get('Success')}}
    
</div>


@endif

<form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Search users"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form>
 @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Sample User details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif

<h1>posts</h1>

@if(count($posts)>0)

    @foreach($posts as $post)
    <div class="well">
        
        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a>  <a href="{{route('posts.delete',['id'=> $post->id])}}" class="btn btn-danger"> x </a></h3>
        
    </div>
    
    @endforeach
@else
<h1>no posts found</h1>
 
 @endif





@endsection

