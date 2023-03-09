<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <title>DASHBOARD</title>
</head>

<body>
    <div class="container-fluid">
        <div class="sidenav pt-4 pl-3">
            <img src="{{ url('img/logo.jpg') }}" alt="">
            <a href="#">Dashboard</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
            <a href="#"></a>
            <button class="dropdown-btn">Dropdown 
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <div class="dropdown-contain">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>

                </div>
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
            <div class="body-page"></div>
        </div>
    </div>
<script src="{{ ('js/main.js') }}"></script>
</body>

</html>