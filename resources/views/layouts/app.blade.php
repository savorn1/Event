<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{asset('bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css')}}" />
    <link rel="stylesheet" href="{{asset('bootstrap/css/font-awesome.css')}}"/>
    <style>
        .jssorb051 .i {position:absolute;cursor:pointer;}
        .jssorb051 .i .b {fill:#fff;fill-opacity:0.5;stroke:#000;stroke-width:400;stroke-miterlimit:10;stroke-opacity:0.5;}
        .jssorb051 .i:hover .b {fill-opacity:.7;}
        .jssorb051 .iav .b {fill-opacity: 1;}
        .jssorb051 .i.idn {opacity:.3;}
    </style>
    <style>
        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700);

        html,body {
            font-family: 'Roboto Slab', serif;
            background-color: #f2eff7;
        }

        .m-0 {
            margin-top: 0;
        }

        header {
            position: relative;
            height: 400px;
            padding-top: 20px;
            box-shadow: 0 60px 90px -90px rgba(0,0,0,.75);
            background: url('http://i.imgur.com/npRXN3Z.jpg');
        }

        .content-wrapper {
            margin: -220px auto 20px;
        }

        .content-wrapper p {
            margin-bottom: 20px;
            font-size: 19px;
        }

        .contentInner {
            background-color: #fff;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .3);
            float: left;
            position: relative;
            border-radius: 5px;
            padding: 2em;
            font-size: 18px;
            text-align: justify;
            color: #252728;
        }
        .wrapper {
            display: inline-flex;
            margin: 0;
            padding: 0;
            align-items: center;
            justify-content: center;
            height: 50px;
        }

        i {
            padding: 0px 10px;
        }

        .wrapper i:nth-child(1) {
            color: #4867AA;
            cursor: pointer;
            text-shadow: 0px 7px 10px rgba(0, 0, 0, 0.4);
            transition: all ease-in-out 150ms;
        }

        .wrapper i:nth-child(1):hover {
            margin-top: -10px;
            text-shadow: 0px 16px 10px rgba(0, 0, 0, 0.3);
            transform: translate(0, -8);
        }

        .wrapper i:nth-child(2) {
            color: #1DA1F2;
            cursor: pointer;
            text-shadow: 0px 7px 10px rgba(0, 0, 0, 0.4);
            transition: all ease-in-out 150ms;
        }

        .wrapper i:nth-child(2):hover {
            margin-top: -10px;
            text-shadow: 0px 16px 10px rgba(0, 0, 0, 0.3);
            transform: translate(0, -8);
        }

        .wrapper i:nth-child(3) {
            color: #813DB4;
            cursor: pointer;
            text-shadow: 0px 7px 10px rgba(0, 0, 0, 0.5);
            transition: all ease-in-out 150ms;
        }

        .wrapper i:nth-child(3):hover {
            margin-top: -10px;
            text-shadow: 0px 14px 10px rgba(0, 0, 0, 0.4);
            transform: translate(0, -5);
        }
        .wrapper i:nth-child(4) {
            color: #fffc00;
            cursor: pointer;
            text-shadow: 0px 7px 10px rgba(0, 0, 0, 0.4);
            transition: all ease-in-out 150ms;
        }
        .wrapper i:nth-child(4):hover {
            margin-top: -10px;
            text-shadow: 0px 16px 10px rgba(0, 0, 0, 0.3);
            transform: translate(0, -8);
        }
    </style>
    @yield('after-styles')

</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a href="#" class="navbar-brand ">Event brite</a>

            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">

                <ul class="nav navbar-nav  hiddent-xs">
                    <li class="hidden-xs hidden-sm"><a href="#">Browser Event</a></li>
                    <li class="dropdown hidden-xs hidden-sm">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Help
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class=""><a href="#">Page 1-1</a></li>
                            <li><a href="#">Page 1-2</a></li>
                            <li><a href="#">Page 1-3</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown hidden-xs hidden-sm" >
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                                <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                                <li><a href="#">Account Setting</a></li>
                                <li><a href="#">Tickets</a></li>

                            </ul>
                        </li>
                    @endif
                </ul>



            </div>
        </div>
    </nav>

    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker6').datetimepicker();
        $('#datetimepicker7').datetimepicker({
            useCurrent: false //Important! See issue #1075
        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
    });
</script>
<script type="text/javascript" src="{{asset('bower_components/moment/min/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
@yield('after-script')
</body>
</html>
