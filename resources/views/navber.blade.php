<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Task Management System</title>
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