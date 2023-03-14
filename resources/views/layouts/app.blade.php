<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('csstyle')
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <title>Shoe Industry</title>
</head>

<body>
    <div class="">
        <nav class="navbar navbar-expand-lg bg-light navbar-light">
            <!-- Brand -->
            <a class="navbar-brand" href="#">SHOETAGS</a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" style="outline: none;">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('/') }}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('/servcie') }}">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('/blog') }}">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('/about') }}">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('/contact') }}">CONTACT</a>
                    </li>
                </ul>
                <div class="login-botton ml-auto">
                    <a href="{{ asset('/login') }}">
                        <button class="btn btn-primary">Login</button>
                    </a>
                    <a href="#">
                        <button class="btn btn-warning">Sign Up</button>
                    </a>
                </div>
            </div>
        </nav>
        <div class="">
            <div class="page-body">
                @yield('content')
            </div>
            <footer class="mt-4 footer">
                <p>2023 © Influence - Designed by <a href="#">Smith</a></p>
            </footer>
        </div>
    </div>
    <script src="{{ ('js/jquery.min.js') }}"></script>
    <script src="{{ ('js/popper.min.js') }}"></script>
    <script src="{{ ('js/bootstrap.min.js') }}"></script>
    <script src="{{ ('js/all.js') }}"></script>
    <script src="{{ ('js/main.js') }}"></script>
</body>

</html>