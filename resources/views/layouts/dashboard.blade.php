<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <title>DASHBOARD</title>
</head>

<body>
    <div class="container-fluid">
        <div class="sidenav pt-4 pl-3">
            <a href="{{ asset('/') }}">
                <img src="{{ url('img/logo.jpg') }}" alt="">
            </a>
            <div class="side-nav-text">
                <a href="{{ asset('/dashboard') }}"><i class="fa-solid fa-house mr-2"></i>Dashboard</a>
                <a href="{{ asset('/dashboard/table') }}">Table</a>
                <a href="{{ asset('/dashbord/application') }}">Application</a>
                <a href="#"></a>
                <button class="dropdown-btn">Page
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                    <div class="dropdown-contain">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>

                    </div>
                </div>
                <a href="#">Contact</a>
            </div>
        </div>
        <div class="body-container">
            <nav class="navbar navbar-expand-sm bg-white navbar-dark">
                <a class="navbar-brand text-dark" href="#">DASHBOARD</a>
                <div class="profile ml-auto">
                    <div class="profile-image">
                        <img src="{{ url('img/shoe.png') }}" alt="">
                    </div>
                </div>

            </nav>
                @yield('content')
            <footer class="mt-4 footer">
               <p>2023 © Influence - Designed by <a href="#">Smith</a></p> 
            </footer>
        </div>
    </div>
    <script src="{{ ('js/all.js') }}"></script>
    <script src="{{ ('js/main.js') }}"></script>
</body>

</html>