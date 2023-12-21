<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield ('pagetitle') | KatKaartvandeDag</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('img/favi.png') }}">
        <link rel="stylesheet" href="{{ asset('css/includes.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        @yield ('styles')
    </head>
    <body>
        <header id="header">
            <nav>
                <a href="{{ route('home.index') }}">
                    <img id="logo" class="navsleft" src="{{ asset('img/dasillystore.png') }}" alt="logo">
                    <img id="exclusives" src="{{ asset('img/exclusives.png') }}" alt="exclusives">
                </a>

                <a href="{{ route('home.index') }}">
                    <img id="logosmall" class="navsleft" src="{{ asset('img/dasillystorelogo.png') }}" alt="logosmall">
                </a>

                @guest
                <a href="{{ route('login') }}">
                    <img id="loginbutton" class="navsright" src="{{ asset('img/loginempty.png') }}" alt="login">
                </a>
                @endguest

                @auth
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logoutbutton').submit();">
                    <img id="logoutimg" class="navsright" src="{{ asset('img/logout.png') }}" alt="pfp">

                    <form id="logoutbutton" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </a>

                <a href="{{ route('profile.edit') }}">
                    <img id="profilebutton" class="navsright" src="{{ asset(Auth::user()->pfp) }}" alt="pfp">
                </a>
                @endauth

            </nav>
        </header>

        @yield('content')

        <a href="https://www.kharua.xyz/">
            <img id="hank" src="{{ asset('img/Hank_Certified_Website.png') }}">
        </a>

        <script src="{{ asset('js/script.js') }}"></script>
        @yield ('scripts')
    </body>
</html>
