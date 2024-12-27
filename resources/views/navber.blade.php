<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Navber</title>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-left">
            <img src="{{ asset('assets/images/task logo.png') }}" class="logo" alt="task icon">
        </div>
        <div class="navbar-center">
            <a href="/">Home</a>
            <a href="#">About Us</a>
            <a href="#">Contact</a>
        </div>
        <div class="navbar-right">
            <a href="/login" class="login">Login</a>
            <a href="/sign-up" class="signup" style="margin-right: 100px">Sign Up</a>
        </div>
    </nav>
</body>
@yield('main')
@yield('registrationJS')
<footer>
        <p class="text-center">© 2024 xyz company, all right reserved</p>
    </footer>
    <script src="{{ asset('assets/js/bootstrap.bundle.5.1.3.min.js') }}"></script>
</html>