<!DOCTYPE html>
<html lang="en">

<head>
    <meta    charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Lorem Ipsum</title>
</head>

<body>
    {{-- @include('component') --}}
    {{-- navbar --}}
    @yield('navbar')

    {{-- Content Home --}}
    <div class="home-content">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit?</p>
        <h1>Contact Here</h1>
        <button class="btn-home">
            <p>Contact</p>
        </button>
    </div>

    {{-- Achievement --}}
    <div class="achievement" id="achievement">
        <p class="achievement-text">Achievement</p>

        <div class="all-winner-box">

            <div class="box">
                <p class="h1-box">First Winner</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tenetur, doloribus ex sapiente
                    aliquam quisquam sit voluptas fuga officiis architecto. Magni soluta quos blanditiis placeat
                    accusamus dignissimos animi est natus.</p>
            </div>

            <div class="box">
                <p class="h1-box">Second Winner</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tenetur, doloribus ex sapiente
                    aliquam quisquam sit voluptas fuga officiis architecto. Magni soluta quos blanditiis placeat
                    accusamus dignissimos animi est natus.</p>
            </div>

        </div>

    </div>

    {{-- about us --}}
    <div class="about-us">

        <div class="card">

            <img class="about-img" src="{{ asset('assets/company.jpg') }}" alt="">
            <div class="about-us-content">
                <h2>
                    About Us
                </h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates minus, quisquam quasi id animi
                    nobis necessitatibus tempore reiciendis perspiciatis ea! Nulla facilis sequi accusamus placeat
                    recusandae qui aliquid dolore assumenda</p>
            </div>
        </div>

    </div>

    {{-- Footer --}}
    <div class="footer">
        <div class="footer-logo">
            <img src="{{ asset('assets/logo.png') }}" alt="">
            <p class="footer-title">Lorem Ipsum</p>
        </div>
        <div class="footer-info">
            <p>Lorem Ipsum Street</p>
            <div class="sosmed-img">
                <img src="{{ asset('assets/ig.png') }}" alt="">
                <img src="{{ asset('assets/email.png') }}" alt="">
            </div>
            <p>Copyright 2022</p>
        </div>
    </div>

</body>

</html>
