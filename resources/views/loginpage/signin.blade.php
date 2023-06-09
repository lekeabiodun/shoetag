<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sign.css') }}">
    <title>SIGNIN</title>
</head>
<body>
    <div class="container-fluid">
        <div class="login-box row">
            <div class="col-lg-6 col-xl-6">
                <img src="{{ url('img/shoe.png') }}" alt="" class="login-img">
            </div>
            <div class="login-text col-lg-6 col-xl-6">
                <h2 class="login-head mt-3" >SIGN IN</h2>
                <form action="" class="mt-3 p-3">
                    <input type="text" name="Uname" id="Uname" placeholder="Username" class="mt-3">
                    <input type="email" name="email" id="email" placeholder="Email Address" class="mt-3">
                    <input type="password" name="pass" id="pass" placeholder="Password" class="mt-3">
                    <button type="submit" class="btn btn-primary mt-3">Sign in</button>
                    <div class="other">
                        <p class="mt-3 sign-text">Already had an account? <a href="{{ asset('login') }}">LOGIN</a> </p>
                    </div>
                    <!-- <div class="login-line m-3">
                        <hr class="mr-3">
                        <div class="login-or">OR</div>
                        <hr class="ml-3">
                    </div> -->
                </form>
            </div>
        </div>
    </div>
</body>
</html>