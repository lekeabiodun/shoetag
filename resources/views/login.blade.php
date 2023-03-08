<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>LOGIN</title>
</head>
<body>
    <div class="container-fluid">
        <div class="login-box row">
            <div class="login-text col">
                <h2 class="login-head mt-3" >LOGIN</h2>
                <form action="" class="mt-3 p-3">
                    <input type="text" name="Uname" id="Uname" placeholder="Username">
                    <input type="password" name="pass" id="pass" placeholder="Password" class="mt-3">
                    <button type="submit" class="btn btn-primary mt-3">Login</button>
                    <div class="other">
                        <p class="mt-2 sign-text">Already have an account <a href="#">SIGN IN</a> </p>
                        <a href="#" class="forgotten">Forgotten Password</a>
                    </div>
                    <div class="login-line m-3">
                        <hr class="mr-3">
                        <div class="login-or">OR</div>
                        <hr class="ml-3">
                    </div>
                </form>
            </div>
            <div class="col">
                <img src="{{ url('img/shoe.png') }}" alt="" class="login-img">
            </div>
        </div>
    </div>
</body>
</html>