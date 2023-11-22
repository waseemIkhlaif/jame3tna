<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- favicon -->
	<link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}">
    {{-- style css --}}
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <title>Login || تسجيل الدخول</title>
</head>
<body style="height: initial!important; overflow-x: hidden;">
    <section class= "login">
        <div class= "login1">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h3>Sign In</h3>
                <p>USERNAME</p>
                <input type="text" required placeholder = "Username" class="username" name="username" id="username">
                <p>PASSWORD</p>
                <input type="password" required placeholder = "Password" class="password" name="password" id="pass">
                <p style="color: red">{{session('invalid')}}</p>
                <input type="submit" value="Sign In" class="signin" name="submit" id="submit">
            </form>
        </div>
        <div class= "login2">
            <div class="flex">
                <h3>Welcome to login</h3>
            </div>
        </div>
    </section>
</body>
</html>
