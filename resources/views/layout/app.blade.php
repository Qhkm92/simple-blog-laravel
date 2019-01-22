<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="<?php echo asset('css/custom.css')?>" type="text/css">
        <script src="{{asset('js/app.js')}}"></script>
        <title>{{config('app.name', 'laratest')}}</title>
          <!-- CSRF Token -->
         <meta name="csrf-token" content="{{ csrf_token() }}">

    </head>
    <body>
        <div id="app">
        @include('inc.navbar')
            <div class='container'>
                @include('inc.messages')
                @yield('content')
            </div>
            
   
      <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>    
    </body>
</html>
