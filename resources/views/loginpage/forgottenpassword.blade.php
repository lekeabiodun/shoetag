<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/forgotten.css') }}">
    <title>FORGOTTENPASSWORD</title>
</head>

<body>
    <div class="container-fluid">
        <div class="forgotten-box ">
            <div class="forgotten-text ">
                <h2 class="forgotten-head mt-1">FORGOTTEN PASSWORD</h2>
                <P class="forgotten-subhead">Enter the email adress associated with your account</P>
                <form action="" class="input-box">
                    <input type="email" name="email" id="email" placeholder="Email Address" class="mb-3">
                    <button type="submit" class="btn btn-primary">RESET PASSWORD</button>
                    <a href="{{ asset('login') }}" class="btn btn-back mt-2">Go back</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>