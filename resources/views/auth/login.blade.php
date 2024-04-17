<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>LOGIN</title>
</head>

<body>
    <div class="container-fluid">
        <div class="login-box row">
            <div class="login-text col-lg-6 col-xl-6">
                <a href="/"><i class="fa-solid fa-arrow-left fa-1x"></i></a>

                <h2 class="login-head mt-4">LOGIN</h2>
                @if(session('message'))
                <span class="text-danger">{{ session('message') }}</span>
                @endif

                <form action="{{ url('/login') }}" method="POST" class="mt-3 p-2">
                    @csrf
                    <input type="email" name="email" id="email" placeholder="email">
                    <input type="password" name="password" id="password" placeholder="password" class="mt-2">
                    <button type="submit" class="btn btn-primary mt-3">Login</button>
                    <div class="other">
                        <p class="mt-2 sign-text">Need an account? <a href="{{ url('/register') }}">Register</a> </p>
                        <a href="{{ url('forgot_password') }}" class="forgotten">Forgot Password</a>
                    </div>
                    <div class="login-line m-3">
                        <hr class="mr-2">
                        <div class="login-or">OR</div>
                        <hr class="ml-2">
                    </div>
                    <div class="social">
                        <div class="social-logo">
                            <div class="soc goggle">e</div>
                            <div class="soc facebook">k</div>
                            <div class="soc microsoft">t</div>
                            <div class="soc whatsapp">w</div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-xl-6 login-img-head">
                <img src="{{ url('img/sneakers/sneakers (9).jpeg') }}" alt="" class="login-img">
            </div>
        </div>
    </div>

    <script src="{{ url('js/jquery.min.js') }}"></script>
    <script src="{{ url('js/popper.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script src="{{ url('js/all.js') }}"></script>
</body>

</html>