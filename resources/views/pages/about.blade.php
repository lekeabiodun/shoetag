@extends('layouts.app')

@section('csstyle')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection

@section('content')

<div class="container-fluider row">
    <div class="about-text col-6"> 
        <p>Hello,</p>
        <h1>Welcome</h1>
        <h3>To Nigeria Shoe Industry</h3>
        <p class="mb-5">Follow us on out social media link below to keep you more updated on or new products</p>
        <div class="about-icons mt-5">
            <div class="about-con"></div>
            <div class="about-con"></div>
            <div class="about-con"></div>
            <div class="about-con"></div>
        </div>
        <button class="btn btn-warning about-button mt-2"> Contact us</button>
    </div>
    <div class="about-img col-6">
        <div class="img-container">
        </div>
    </div>
</div>


@endsection