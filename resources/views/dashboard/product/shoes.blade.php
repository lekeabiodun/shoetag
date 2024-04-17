@extends('layouts.dashboard')

@section('style')
<link rel="stylesheet" href="{{ url('css/product.css') }}">
@endsection

@section('header')
<a class="navbar-brand text-dark" href="#">HEELS</a>
@endsection

@section('content')
<div class="contentt">
    <div class="container-fluid mt-4">
        <div class="sectiom">
            <h3>Explore your options</h3>
            <div class="row">

                <div class="col-8 sectiom-box">
                    <p>choose your favorite Heels to acquire</p>
                </div>
                <!-- <div class="col-4 " style="display: flex; justify-content: right; ">
                    <div class="dropdown mx-auto">
                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                            <span>category</span> 
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Link 1</a>
                            <a class="dropdown-item" href="#">Link 2</a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                    </div>

                </div> -->
            </div>
            <div class="box-container">
                <div class="box-header row">
                    <div class="col-8 header-box">
                        <p>MALE</p>
                    </div>
                    <div class="col-4" style="display: flex; justify-content: right; ">
                        <button class="see-all" style="">see all...</button>
                    </div>
                </div>
                <div class="boxs-houses mt-3">
                    <div class="box-section row">
                        <div class="box col-xs-12 col-sm-6 col-md-4 col-xl-3 one mb-3">
                            <img src="{{ url('img/shoe/shoe (1).jpeg') }}" alt="">
                            <div class="one-text text-center mt-2">
                                <p class="image-text">Brown Shoe</p>
                                <p class="image-figure">#20,000</p>
                            </div>
                            <div class="one-box" style="">
                                <button class="btn btn btn-one-2"><i class="fa-solid fa-cart-plus mr-3"></i>Add to Chart</button>
                            </div>
                        </div>
                        <div class="box col-xs-12 col-sm-6 col-md-4 col-xl-3 one mb-3">
                            <img src="{{ url('img/shoe/shoe (2).jpeg') }}" alt="" class="img-photo">
                            <div class="one-text text-center mt-2">
                                <p class="image-text">Black Shoe</p>
                                <p class="image-figure">#15,000</p>
                            </div>
                            <div class="one-box" style="">
                                <button class="btn btn btn-one-2"><i class="fa-solid fa-cart-plus mr-3"></i>Add to Chart</button>
                            </div>
                        </div>
                        <div class="box col-xs-12 col-sm-6 col-md-4 col-xl-3 one mb-3">
                            <img src="{{ url('img/shoe/shoe (3).jpeg') }}" alt="" class="img-photo">
                            <div class="one-text text-center mt-2">
                                <p class="image-text">Flowered Shoe</p>
                                <p class="image-figure">#14,000</p>
                            </div>
                            <div class="one-box" style="">
                                <button class="btn btn btn-one-2"><i class="fa-solid fa-cart-plus mr-3"></i>Add to Chart</button>
                            </div>
                        </div>
                        <div class="box col-xs-12 col-sm-6 col-md-4 col-xl-3 one mb-3">
                            <img src="{{ url('img/shoe/shoe (4).jpeg') }}" alt="Q" class="img-photo">
                            <div class="one-text text-center mt-2">
                                <p class="image-text">White Shoe</p>
                                <p class="image-figure">#15,000</p>
                            </div>
                            <div class="one-box" style="">
                                <button class="btn btn btn-one-2"><i class="fa-solid fa-cart-plus mr-3"></i>Add to Chart</button>
                            </div>
                        </div>
                        <div class="box col-xs-12 col-sm-6 col-md-4 col-xl-3 one mb-3">
                            <img src="{{ url('img/shoe/shoe (11).jpeg') }}" alt="">
                            <div class="one-text text-center mt-2">
                                <p class="image-text">Black Shoes</p>
                                <p class="image-figure">#7,000</p>
                            </div>
                            <div class="one-box" style="">
                                <button class="btn btn btn-one-2"><i class="fa-solid fa-cart-plus mr-3"></i>Add to Chart</button>
                            </div>
                        </div>
                        <div class="box col-xs-12 col-sm-6 col-md-4 col-xl-3 one mb-3">
                            <img src="{{ url('img/shoe/shoe (6).jpeg') }}" alt="" class="img-photo">
                            <div class="one-text text-center mt-2">
                                <p class="image-text">Men Shoes</p>
                                <p class="image-figure">#10,000</p>
                            </div>
                            <div class="one-box" style="">
                                <button class="btn btn btn-one-2"><i class="fa-solid fa-cart-plus mr-3"></i>Add to Chart</button>
                            </div>
                        </div>
                        <div class="box col-xs-12 col-sm-6 col-md-4 col-xl-3 one mb-3">
                            <img src="{{ url('img/shoe/shoe (13).jpeg') }}" alt="" class="img-photo">
                            <div class="one-text text-center mt-2">
                                <p class="image-text">Black Mixed Shoe</p>
                                <p class="image-figure">#12,000</p>
                            </div>
                            <div class="one-box" style="">
                                <button class="btn btn btn-one-2"><i class="fa-solid fa-cart-plus mr-3"></i>Add to Chart</button>
                            </div>
                        </div>
                        <div class="box col-xs-12 col-sm-6 col-md-4 col-xl-3 one mb-3">
                            <img src="{{ url('img/shoe/shoe (8).jpeg') }}" alt="" class="img-photo">
                            <div class="one-text text-center mt-2">
                                <p class="image-text">Black Shoe</p>
                                <p class="image-figure">#6,000</p>
                            </div>
                            <div class="one-box" style="">
                                <button class="btn btn btn-one-2"><i class="fa-solid fa-cart-plus mr-3"></i>Add to Chart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection