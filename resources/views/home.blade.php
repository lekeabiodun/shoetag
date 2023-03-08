@extends('layouts.app')

@section('content')       
        <div class="head header">
        <h1 class="header-head">HELLO WORLD</h1>
        <img src="{{ url('img/shoe.png') }}" alt="shoe-home-page">
       <a href="{{ asset('about') }}">
           <button class="btn btn-primary mt-3">ABOUT</button>
       </a>
@endsection