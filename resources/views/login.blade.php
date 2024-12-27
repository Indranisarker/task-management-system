@extends('navber')

@section('main')
<div class="login-container">
    <div class="image-section">
        <img src="{{ asset('assets/images/blog-3.jpg') }}" class="loginLogo">
    </div>
    <div class="form-section">
        <h1>Login</h1>
        <form>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="admin@gmail.com" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="********" required>
            </div>
            <button type="submit" class="login-btn">Login</button>
        </form>
    </div>
</div>
@endsection