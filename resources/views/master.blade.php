<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <style>
        .navbar-default .navbar-brand {
            color:black;
        }
    </style>
    <script src="{{ asset('bootstrap/js/jquery.min.js')}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js')}}"></script>

</head>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Event brite</a>
        </div>
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
            </ul>
            @if (Route::has('login'))
            <ul class="nav navbar-nav navbar-right">
                        @if (Auth::check())
                           <li> <a href="{{ url('/master') }}">Create Event</a></li>
                        @else
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @endif
            </ul>
            @endif
        </div>
    </div>
</nav>
   @yield('content')
</body>
</html>