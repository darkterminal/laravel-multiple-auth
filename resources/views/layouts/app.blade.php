<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="https://image.ibb.co/h7pX5b/logo.png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-transparent">
        <div class="container">
        <!-- Branding Image -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="https://image.ibb.co/h7pX5b/logo.png" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="photographyLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pothography
                    </a>
                    <div class="dropdown-menu" aria-labelledby="photographyLink">
                       <a class="dropdown-item" href="#">Architecture</a>
                       <a class="dropdown-item" href="#">Models</a>
                       <a class="dropdown-item" href="#">Nature</a>
                       <a class="dropdown-item" href="#">Advanture</a>
                    </div>
                </li>
                <li class="navbar-item"><a class="nav-link" href="">About</a></li>
                <li class="navbar-item"><a class="nav-link" href="">Contact Us</a></li>
            <!-- Authentication Links -->
            @guest
                <li class="navbar-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                <li class="navbar-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
            @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    @if(Auth::guard('web')->check())
                        <a class="dropdown-item" href="{{ route('user.logout') }}">
                            Logout
                        </a>
                    @elseif(Auth::guard('admin')->check())
                         <a class="dropdown-item" href="{{ route('admin.logout') }}">
                            Logout
                        </a>
                    @endif
                    </div>
                </li>
            @endguest
            </ul>
        </div>
        </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
