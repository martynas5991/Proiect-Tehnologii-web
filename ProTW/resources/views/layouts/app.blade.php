<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Kimo') }}</title>

    <!-- Styles -->
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/libs/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/libs/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
    <!-- Styles -->
    <style>

        body {
            background-image: url({{asset('images/kids.jpg') }});
            background-repeat:no-repeat;
            background-size:100% 100vh;
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }
    </style>

    @yield('tablestyle')

</head>
<body>
<div id="app">

    @if(Session::has('flash_message_add'))
        <div class="alert alert-success">
            {{Session::get('flash_message_add')}}
        </div>
    @endif
    @if(Session::has('flash_message'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{Session::get('flash_message')}}
        </div>
    @endif
    {{----}}
    @if(Session::has('message'))
        <div class="alert alert-info">
            {{Session::get('message')}}
        </div>
    @endif

    <nav class="navbar navbar-inverse bg-primary navbar-static-top">
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
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Kimo') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <ul class=" container clearfix collapse navbar-collapse nav navbar-nav navbar-right" id="myNavbar">
                            <li >
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Children
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('add-child') }}">Add child</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('add-existing-child') }}">Add existing child</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('monitor-children') }}">Add interest point</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('deletechild') }}">Delete monitored child</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('notifications') }}">Notifications</a>
                            </li>
                            <li>
                                <a href="{{ route('update') }}">
                                    <span class="glyphicon glyphicon-user"></span> My Profile</a>
                            </li>
                            <li>
                                <a href="/contact">Contact</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-out"></span>
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="{{ asset('assets/js/mapChildren.js') }}"></script>
<script src="{{ asset('assets/js/mapAddPointsOfInterest.js') }}"></script>
<script src="{{ asset('assets/js/mapPointsOfInterest.js') }}"></script>
<script src="{{ asset('assets/js/sort.js') }}"></script>
<script src="{{ asset('assets/js/filter.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
<script>
    $('div.alert-success').delay(3000).slideUp(300);
    $('div.alert-info').delay(3000).slideUp(300);
</script>


{{--Harta--}}
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAL3Z9H-3qKGzVvR2RB2j_U9l95qnPWc2I&libraries=places,geometry"
        async defer></script>
</body>
</html>
