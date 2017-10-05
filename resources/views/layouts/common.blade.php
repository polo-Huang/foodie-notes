<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>

        <script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}" media="screen">
        <link rel="stylesheet" href="{{ asset('css/common.css') }}">

        <!-- CSS And JavaScript -->
        @yield('link')
    </head>

    <body>
        <div class="container">
            <div class="row">
                <nav class="header_nav">
                    <!-- Navbar Contents -->
                    <a class="logo" href="{{ url('/') }}">Foodie Notes</a>
                    <a class="address" href="">[ 深圳 ]</a>
                    <a class="pull-right nav_bar" href="">联系我们</a>
                    <a class="pull-right nav_bar" href="">登录</a>
                </nav>
            </div>
        </div>
        <div class="content">
            @yield('content')
        </div>
    </body>
</html>