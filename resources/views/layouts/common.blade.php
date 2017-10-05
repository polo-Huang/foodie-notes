<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>

        <script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}" media="screen">
        <link rel="stylesheet" href="{{ asset('css/common.css') }}">

        <!-- CSS And JavaScript -->
    </head>

    <body>
        <div class="container">
            <div class="row">
                <nav>
                    <!-- Navbar Contents -->
                    <a href="">登录</a>
                    <a href="">联系我们</a>
                </nav>
            </div>
        </div>

        @yield('content')
    </body>
</html>