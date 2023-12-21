@extends('layouts.app')

@section('csstyle')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection

@section('content')

<div class="container-fluider row">
    <div class="about-text col-md-7 col-lg-6"> 
        <p>Hello,</p>
        <h1>Welcome</h1>
        <h3>To Nigeria Shoe Industry</h3>
        <p class="mb-5">Follow us on out social media link below to keep you more updated on or new products</p>
        <div class="about-icons mt-5">
            <div class="about-con"><i class="fa-solid fa-location-dot"></i></div>
            <div class="about-con"><i class="fa-solid fa-phone"></i></div>
            <div class="about-con"><i class="fa-solid fa-location-dot"></i></div>
            <div class="about-con"><i class="fa-solid fa-location-dot"></i></div>
        </div>
        <button class="btn btn-warning about-button mt-2"> Contact us</button>
    </div>
    <div class="about-img col-md-5 col-lg-6">
        <div class="img-container">
        </div>
    </div>
</div>


@endsection