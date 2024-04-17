@extends('layouts.dashboard')

@section('style')
<link rel="stylesheet" href="{{ url('css/dash-contact.css') }}">
@endsection

@section('header')
<a class="navbar-brand text-dark" href="#">CONTACTS</a>
@endsection

@section('content')
<div class="body-content">
    <div class="content-body">
        <form action="">
            <label for="name">Name: </label>
            <input type="text">
            <label for="email">Email Address: </label>
            <input type="email">
            <label for="message">Message: </label>
            <textarea name="message" id="message" rows="7"></textarea>
            <button type="submit" class="btn btn-primary" style="float: right;">submit</button>
        </form>
    </div>
</div>
@endsection