@extends('layouts.dashboard')

@section('style')
<link rel="stylesheet" href="{{ url('css/dashboard.css') }}">
@endsection

@section('header')
<a class="navbar-brand text-dark" href="#">DASHBOARD</a>
@endsection

@section('content')
<div class="body-page">
    <div class="upper-body row container-fluid pb-3 pr-3">
        <div class="f-col col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="inner-box mt-3">
                <h4>Total Income</h4>
                <h1>$123,000</h1>
                <h6>Saved 25%</h6>
            </div>
        </div>
        <div class="f-col col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
            <div class="inner-box mt-3">
                <h4>Total Expences</h4>
                <h1>$123,000</h1>
                <h6>Saved 25%</h6>
            </div>
        </div>
        <div class="f-col col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
            <div class="inner-box mt-3">
                <h4>Cash on Hand</h4>
                <h1>$123,000</h1>
                <h6>Saved 25%</h6>
            </div>
        </div>
        <div class="f-col col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
            <div class="inner-box mt-3">
                <h4>Net Profit Margin</h4>
                <h1>$123,000</h1>
                <h6>Saved 25%</h6>
            </div>
        </div>
    </div>

</div>
@endsection