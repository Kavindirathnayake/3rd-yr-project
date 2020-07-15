<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        {{-- <title>{{config('app.name', 'LSAPP')}}</title> --}}
    </head>
    <body>
       
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        {{-- <a  href="/create">Add</a>
        &nbsp; --}}
        {{-- <a  href="/aboutus">About us</a>
        &nbsp;
        <a  href="#">Pricing</a>
        &nbsp;
        <a c href="#">Disabled</a> --}}
      </div>
    </div>
  </nav>
        @yield('content')
       
       </div>

        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script> 
    <script>
         CKEDITOR.replace( 'article-ckeditor' );
    </script>
    </body>
</html>