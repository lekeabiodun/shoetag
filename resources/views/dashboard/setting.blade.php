@extends('layouts.dashboard')

@section('style')
<link rel="stylesheet" href="{{ url('css/setting.css') }}">
@endsection

@section('header')
<a class="navbar-brand text-dark" href="#">SETTINGS</a>
@endsection

@section('content')
<div class="content" style=" text-transform: capitalize;">
    <div class="section">
        <div class="content-body pt-3 pl-3">
            <!-- <p class="uppertext mt-3">settings</p> -->
            <p class="lowertext mb-4">manage all your settings in here.</p>
            <div class="ciricle mb-3">
                <img src="{{ url('img/car (3).jfif') }}" alt="">
            </div>
            <form action="" method="">
                <label for="username">username</label><br>
                <input type="text" name="" id="">
                <button class="edit-bttn" style="outline: none; border: none;">edit</button><br>
                <label for="email">your email</label><br>
                <input type="email" name="" id="">
                <button class="edit-bttn" style="outline: none; border: none;">edit</button>
            </form>
            <div class="down-button row pb-5" style="gap: 20px;">
                <button class="save mt-3 col-xs-6 col-md-3 col-lg-3" style="outline: none; border: none;">save</button>
                <form action="{{ url('/logout') }}" method="POST" class=" mt-3 col-xs-6 col-md-3 col-lg-3">
                    @csrf
                    <button class="logout-button" style="outline: none; border: none; width: 100%;">log out</button>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection