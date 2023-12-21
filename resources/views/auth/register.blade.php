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
                <h2 class="login-head mt-3" >Register</h2>
                <form action="{{ url('/register') }}" method="POST" class="mt-3 p-3">
                    @csrf
                    <input type="text" name="name" value="{{ old('name') }}" id="name" placeholder="Name" class="mt-3">
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    <input type="email" name="email" value="{{ old('email') }}" id="email" placeholder="Email Address" class="mt-3">
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    <input type="password" name="password" id="password" placeholder="Password" class="mt-3" required>
                    @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                    <button type="submit" class="btn btn-primary mt-3">Register</button>
                    <div class="other">
                        <p class="mt-3 sign-text">Already had an account? <a href="{{ url('login') }}">Login</a> </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>