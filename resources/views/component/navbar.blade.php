@extends('component')

@section('navbar')
<nav>
    <div class="nav-left">
        <img src="{{ asset('assets/logo.png') }}" alt="">
        <a href="/">Lorem Ipsum</a>
    </div>

    <?php
        $a = "berhasil asdfasd";
        $link = '';
        if($a == 'berhasil'){
            $a = "Rifian";
            $link = "/contact";
        }else{
            $a = 'guest';
            $link = 'https://www.youtube.com/';
        }
    ?>

    <div class="nav-right">
        <a href="{{ route('home') }}">Home</a>
        <a href="#achievement">Achievement</a>
        <a href="">Bootstrap</a>
        <a href="">Contact</a>
        <a class="sign-in" href="{{ $link }}">{{ $a }}</a>
    </div>
</nav>
@endsection