<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'driving-license') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        table, th, td {
          border: 3px solid black;
        }
    
         /* table {
       border-collapse: collapse; 
      width:100%; 
     } */
     td,td {
      width: 50%;
    }
    
      th {
      height: 50px;
    }
    
    th, td {
      padding: 10px;
    }
    </style> 
</head>
<body>
    <div id="app">

        @include('navbar')
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
