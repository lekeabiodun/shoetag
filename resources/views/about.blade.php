@extends('layouts.app')

@section('content')
<div class="header">
    <h1 class="header-head">ABOUT</h1>
    <div class="image-box">
        <div class="image-section row mt-4">
            <img src="{{ url('img/shoe.png') }}" alt="" class="col-3">
            <img src="{{ url('img/shoe-3.png') }}" alt="" class="col-3">
            <img src="{{ url('img/shoe-2.png') }}" alt="" class="col-3">
        </div>
    </div>
    <h5 class="about-head mt-4">THANK YOU</h5>

</div>
@endsection