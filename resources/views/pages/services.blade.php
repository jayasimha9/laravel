@extends('layouts.app')

@section('content')
        <h1>{{$title}}</h1>
        
        @if(count($services)>0)
        <ul class="list-group">
        @foreach($services as $service)
        
        <li class="list-group-item">{{$service}}</li>
        
        @endforeach
        </ul>
        @endif
        
        
        <br>
        
         <?php
         echo Form::open(array('url' => '/uploadfile','files'=>'true'));
         echo 'Select the file to upload.';
         echo Form::file('image');
         echo Form::submit('Upload File');
         echo Form::close();
      ?>
        
      
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


@endsection