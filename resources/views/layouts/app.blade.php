<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Shoe Industry</title>
</head>

<body>
    <div class="container-fluid">
        <div class="body-container">
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