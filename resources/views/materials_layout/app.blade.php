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
          <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <ul class="nav navbar-nav">
                <li><a href="/learn/create">Add</a></li>
                

            </ul>
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