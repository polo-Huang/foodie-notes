<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>

        <script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}" media="screen">
        <link rel="stylesheet" href="{{ asset('css/manager/manager.css') }}">

        <!-- CSS And JavaScript -->
        @yield('link')
    </head>

    <body>
        <div class="manager">
            <div class="container">
                <div class="row">
                    <nav class="header_nav">
                        <!-- Navbar Contents -->
                        <a class="logo" href="{{ url('/manager/index') }}">Foodie Notes Manage</a>
                        <a class="pull-right nav_bar btn-cool" href="{{ url('/') }}">polo</a>
                        <a class="pull-right nav_bar btn-cool btn-one" href="{{ url('/') }}">前台</a>
                    </nav>
                    <nav class="nav-tab">
                        <!-- Navbar Contents -->
                        <a class="nav_bar @if(substr($_SERVER['REQUEST_URI'], 0, 11) == '/manager/user')active @endif" id="active" href="{{ url('/manager/user/index') }}">用户</a>
                        <a class="nav_bar @if(substr($_SERVER['REQUEST_URI'], 0, 12) == '/manager/store')active @endif" href="{{ url('/manager/store/index') }}">店铺</a>
                    </nav>
                </div>
            </div>
            <div class="content">
                @yield('content')
            </div>
        </div>
    </body>
</html>