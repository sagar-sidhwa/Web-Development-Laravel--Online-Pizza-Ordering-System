@extends('layouts.app')
@section('content')
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- #Banner -->
<div class="banner-image">
        <div class="container">
        <div class="inner-banner-image">
        <div class="banner_content">
        <h1>Delicious  Pizzassss</h1>
        <h1>Spicy Pizzassss</h1>
        <p>Enjoy the worlds Best Pizzas Here</p>
        <a href="/pizza/public/menu" class="btn btn-primary">Order Now</a>
        </div>
        </div>
        </div>
</div>
<hr>
<!-- #Offers -->
<div class="row">
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
        <img class="card-img-top" src="/pizza/storage/images/o3.jpg" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" data-holder-rendered="true">
        <div class="card-body">
            <div class="card-text">
                <p>Now Get 2 Medium </p>
                <h3>Pizza   @199</h3>
                <h2>Only</h2>
            </div>
            <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">Order Now</button>
            </div>
            <small class="text-muted">9 mins left to valid</small>
            </div>
        </div>
        </div>
    </div>

    <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
            <img class="card-img-top" src="/pizza/storage/images/o4.jpg" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" data-holder-rendered="true">
            <div class="card-body">
                    <div class="card-text">
                            <p>Now Get Up to </p>
                            <h3>Rs 200 Cashback</h3>
                            <h2>ON PAYTM UPI PAYMENT</h2>
                        </div>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Order Now</button>
                </div>
                <small class="text-muted">5 mins left to valid</small>
                </div>
            </div>
            </div>
    </div>

    <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
            <img class="card-img-top" src="/pizza/storage/images/o5.jpg" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" data-holder-rendered="true">
            <div class="card-body">
                    <div class="card-text">
                            <p>Now Get Up to </p>
                            <h3>Rs 150 Cashback</h3>
                            <h2>ON AMAZON PAY</h2>
                        </div>    
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Order Now</button>
                </div>
                <small class="text-muted">19 mins left to valid</small>
                </div>
            </div>
            </div>
    </div>
</div>

<hr>
<!-- #story -->
<div id="story" class="light-wrapper">
    <section class="ss-style-top"></section>
    <div class="container inner">
        <h2 class="section-title text-center">Our Story</h2>
        <p class="lead main text-center">We're cooking delecious Pizzas since 1879</p>
        <div class="row text-center story">
            <div class="col-sm-4">
                <div class="col-wrapper">
                    <div class="icon-wrapper"> <i class="fa fa-anchor"></i> </div>
                    <h3>EST. 1970</h3>
                    <p>PIZZY's Pizza,branded as #PIZZY, is an American multinational pizza restaurant chain founded in 1970. The corporation is headquartered at the Domino's Farms Office Park in Ann Arbor, Michigan.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col-wrapper">
                    <div class="icon-wrapper"> <i class="fa  fa-cutlery"></i> </div>
                    <h3>Cooking Traditions</h3>
                    <p>Everyone loves a good old favourite and our Traditional range of pizzas provides just that for our customers. This range is home to favourites such as the BBQ Meatlovers and Supreme and our lifelong fans come back again and again to have one of our tasty traditional pizzas. </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col-wrapper">
                    <div class="icon-wrapper"> <i class="fa fa-coffee"></i> </div>
                    <h3>Food Quality</h3>
                    <p>We value our customers and strive to provide a pleasant experience everytime. The All New pizza's’s with softer crust, tastier sauce, more toppings and more cheese is revamped with the same prices. The overall pizza prices have been set to offer you the best taste at the best price.</p>
                </div>
            </div>
        </div>
        <!-- /.services --> 
    </div>
    <!-- /.container -->
</div><!-- #story -->
@endsection
