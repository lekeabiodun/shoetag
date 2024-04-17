<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/all.css') }}">
    <link rel="stylesheet" href="{{ url('css/dashboard-lay.css') }}">
    @yield('style')
    <link rel="stylesheet" href="{{ url('css/footer.css') }}">
    <title>DASHBOARD</title>
</head>

<body>
    <div class="container-fluid">
        <div id="" class="sidenav pt-4 pl-3 destop-display ">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="{{ url('/dashboard') }}">
                <h2 class="sidenav-header">SHOETAGS</h2>
            </a>
            <div class="side-nav-text">
                <a href="{{ url('/dashboard') }}"><i class="fa-solid fa-house mr-2"></i>Dashboard</a>
                <!-- <a href="{{ url('/dashboard/shoes') }}"><i class="fa-solid fa-house mr-2"></i>Table</a> -->
                <a href="#"></a>
                <button class="dropdown-btn"><i class="fa-solid fa-bars mr-2"></i></i>Product
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                    <div class="dropdown-contain">
                        <a href="{{ url('dashboard/product/heels') }}">Heels</a>
                        <a href="{{ url('dashboard/product/sneakers') }}">Sneakers</a>
                        <a href="{{ url('dashboard/product/boots') }}">Boots</a>
                        <a href="{{ url('dashboard/product/shoes') }}">Shoes</a>

                    </div>
                </div>
                <a href="{{ url('/dashboard/users') }}"><i class="fa-solid fa-users mr-2"></i>Users</a>
                <a href="{{ url('/dashboard/contact') }}"><i class="fa-solid fa-phone mr-2"></i></i>Contact</a>
                <a href="{{ url('/dashboard/setting') }}"><i class="fa-solid fa-gear mr-2"></i>Settings</a>
            </div>
            <!-- <div class="ml-auto">
                <form action="{{ url('/logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger logout-btn">Logout</button>
                </form>
            </div> -->
        </div>
        <div id="mySidenav" class="sidenav pl-1 media-display">
            <div class="pt-5 pl-3" style="height: 100vh;">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="{{ url('/dashboard') }}">
                    <h2 class="sidenav-header">SHOETAGS</h2>
                </a>
                <div class="side-nav-text">
                    <a href="{{ url('/dashboard') }}"><i class="fa-solid fa-house mr-2"></i>Dashboard</a>
                    <!-- <a href="{{ url('/dashboard/shoes') }}"><i class="fa-solid fa-house mr-2"></i>Table</a> -->
                    <a href="#"></a>
                    <button class="dropdown-btn"><i class="fa-solid fa-bars mr-2"></i></i>Product
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <div class="dropdown-contain">
                            <a href="{{ url('dashboard/product/heels') }}">Heels</a>
                            <a href="{{ url('dashboard/product/sneakers') }}">Sneakers</a>
                            <a href="{{ url('dashboard/product/boots') }}">Boots</a>
                            <a href="{{ url('dashboard/product/shoe') }}">Shoes</a>
                        </div>
                    </div>
                    <a href="{{ url('/dashboard/users') }}"><i class="fa-solid fa-users mr-2"></i>Users</a>
                    <a href="#"><i class="fa-solid fa-phone mr-2"></i></i>Contact</a>
                    <a href="#"><i class="fa-solid fa-gear mr-2"></i>Settings</a>
                </div>
                <div class="ml-auto">
                    <form action="{{ url('/logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger logout-btn">Logout</button>
                    </form>
                </div>

            </div>
        </div>
        <div class="body-container">
            <nav class="navbar navbar-expand-sm bg-white navbar-dark">
                <span class="slide-show-button mr-1" onclick="openNav()">&#9776;</span>
                @yield('header')
            </nav>
            @yield('content')
            <footer class="mt-4 footer">
                <p>2023 © Influence - Designed by <a href="#">Smith</a></p>
            </footer>
        </div>
    </div>

    <script src="{{ url('js/jquery.min.js') }}"></script>
    <script src="{{ url('js/popper.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script src="{{ url('js/all.js') }}"></script>
    <script src="{{ url('js/slider.js') }}"></script>
    <script src="{{ url('js/main.js') }}"></script>
</body>

</html>