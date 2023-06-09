@extends('layouts.app')

@section('csstyle')
<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
@endsection

@section('content')
<div class="content">
    <div class="homepage-body">
        <h1>SHOES COLLECTION</h1>
        <P>New Trending Shoes</P>
    </div>
    <div class="bomebody mt-3 p-5">
        <h3>Collections</h3>
        <div class="slider-box row container">
            <div class="slide-one col-6">
                <div class="slide-inner">
                    <h5 class="mb-5">Men Collection</h5>
                    <div id="demo-1" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo-1" data-slide-to="0" class="active"></li>
                            <li data-target="#demo-1" data-slide-to="1"></li>
                            <li data-target="#demo-1" data-slide-to="2"></li>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ url('img/shoe-2.png') }}" alt="Los Angeles">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ url('img/shoe-3.png') }}" alt="Chicago">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ url('img/shoe.png') }}" alt="New York">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo-1" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo-1" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>
            </div>
            <div class="slide-one col-6">
                <div class="slide-inner">
                    <h5 class="mb-5">Girls collection</h5>
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ url('img/shoe-2.png') }}" alt="Los Angeles">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ url('img/shoe-3.png') }}" alt="Chicago">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ url('img/shoe.png') }}" alt="New York">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection

@section('footer')
<div class="footer-content row">
    <div class="content col-xs-12 col-sm-6 col-lg-3">
        <div class="inner-content">
            <h4>Store</h4>
            <p> Men </p>
            <p>Women</p>
            <p> Children </p>
            <p> New Arrivals  </p>
            <p>Top Brands </p>
            <p>Special Offers </p>
        </div>
    </div>
    <div class="content col-xs-12 col-sm-6 col-lg-3">
        <div class="inner-content">
            <h4>About</h4>
            <p>About Us </p>
            <p>Offers </p>
            <p> Services </p>
            <p> Best Sellers</p>
            <p> Blog </p>
            <p> Contest</p>
        </div>
    </div>
    <div class="content col-xs-12 col-sm-6 col-lg-3">
        <div class="inner-content">
            <h4>Legal</h4>
            <p>Terms & Conditions</p>
            <p> Privacy Policy </p>
            <p>  Legality </p>
            <p>Author License</p>
        </div>
    </div>
    <div class="content col-xs-12 col-sm-6 col-lg-3">
        <div class="inner-content">
            <h4>Subscribe</h4>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis veniam eius laudantium quia possimus provident officiis eligendi, voluptatem quis nemo alias eveniet in fugit suscipit, earum, ut nulla perferendis doloremque?</p>
            <input type="text" placeholder="text"><button type="submit">submit</button>
        </div>
    </div>
</div>
<hr>

@endsection