<!DOCTYPE html>






<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'blog') }}</title>

    <!-- Scripts -->
    



    <!-- Fonts -->
    
    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}"
    
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    
<!--    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
    
    
    
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <script src="{{asset('js/toastr.min.js')}}" ></script>
 
   <script>
   
   @if(Session::has('success'))
   
        toastr.success("{{Session::get('success')}}");
   
   @endif
   
   @if(Session::has('info'))
   
        toastr.info("{{Session::get('info')}}");
   @endif
   
   </script>
    
    
    <div id="app">
        
        <main class="py-4">
            @include('inc.navbar')
            <div class="container">
            @include('inc.messages')
                @yield('content')
                
            </div>
        </main>
    </div>
   
   @yield('scripts')
   
</body>
</html>
