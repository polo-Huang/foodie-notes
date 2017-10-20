<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>

        <script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/admin/admin.js') }}"></script>
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}" media="screen">
        <link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">

        <!-- CSS And JavaScript -->
        @yield('link')
    </head>

    <body>
        <div class="admin">
            <div class="admin_left">
                <div class="logo">
                    <a href="{{ url('/admin/index') }}">Foodie-Notes Admin</a>
                </div>
                <div class="navbar">
                    <ul>
                        <li>
                            <div>用户&nbsp;User</div>
                            <ul>
                                <li>info</li>
                            </ul>
                        </li>
                        <li>
                            <div>餐厅&nbsp;Store</div>
                            <ul>
                                <li>store manager</li>
                                <li>store cate</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="admin_right">
                <div class="admin_right_header">
                    <header class="row">
                        <div class="col-xs-6">Admin</div>
                        <div class="col-xs-6 text-right">
                            <a class="btn-cool btn-one" href="{{ url('/') }}">home</a>
                            &nbsp;
                            <a class="btn-cool" href="">polo</a>
                        </div>
                    </header>
                </div>
                <div class="admin_content">
                    @yield('content')
                </div>
                <div class="admin_right_footer">
                    <footer>
                        <div class="row">
                            
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>