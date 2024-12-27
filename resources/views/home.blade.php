@extends('navber')

@section('main')
<img src="{{ asset('assets/images/bg 2.jpg') }}" style="margin-left: 70px;" alt="home image" class="homeLogo">
<section class="about-us">
    <div class="container">
        <div class="image">
            <img src="{{ asset('assets/images/bg 1.jpg') }}" alt="Team Meeting">
        </div>
        <div class="content">
            <h2>Welcome to Our Task Management System</h2>
            <h3>About Us</h3>
            <p>Simplify teamwork with our Task Management and Submission System. From assigning tasks to tracking progress, we help teams stay organized and productive with ease.</p>
            <blockquote>Streamline tasks, boost productivity, and achieve more together</blockquote>
        </div>
    </div>
</section>
<section class="statement">
    <h1>Our Mission & Vision</h1>
    <br>
    <br>
    <p> “Our mission is to provide a simple yet efficient platform for <span class="bold"> tasks</span> and <span class="bold">projects</span>, fostering <span class="bold">collaboration</span>, and enhancing <span class="bold">team productivity</span>.”</p>
    <section class="quiotion">
        <br>
        <br>
        <br>
        <p> “To be the go-to solution for seamless <span class="bold">task management</span>, <span class="bold">empowering teams</span> to achieve their goals effortlessly and efficiently.”</p>
    </section>
</section>
@endsection