@extends('layouts.app')

@section('content')
@guest
<hr>
<div class="jumbotron text-center">
<h1>Please login!</h1>
<h3>To Enjoy the delicious Pizzas</h3>
<h4>Thank you</h4>
</div>
@endguest
@auth
<div class="row">
        <div class="col-md-3">
                <div class="sidenav bg-dark">
                        <div class="">
                                <a href="/pizza/public/type1">Margherita Pizza</a>
                                <a href="/pizza/public/type2">Neapolitan Pizza</a> 
                                <a href="/pizza/public/type3">California Pizza</a>
                                <a href="/pizza/public/type4">Greek Pizza</a>
                                <a href="/pizza/public/type5">New York Pizza</a>
                                <a href="/pizza/public/type6">Sicilian Pizza</a> 
                        </div>
                </div>    
        </div>

        <div class="col-md-8">
        <hr>
                <div class="row container-fluid">
                        <div class="jumbotron text-center col-md-12">
                        <h1>We Offer You The Following New York Pizza</h1>
                        </div>
                </div>
        <hr><hr>
                <div class="row container-fluid">
                        <div class="jumbotron text-center col-md-12">
                                <h1>Veg New York Pizza</h1>
                        </div>
                </div>
                <div class="row">
                        <div class="col-md-4">
                                <div class="card mb-4 shadow-sm text-center">
                                        <img class="card-img-top" src="/pizza/storage/images/t501.jpg" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" data-holder-rendered="true">
                                        <div class="card-body">
                                                <div class="card-text">
                                                        <h2 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Small New York Pizza</h2>
                                                        <p>Ratings</p>
                                                        <h3>4.3/5</h3>
                                                        <h4>@ 99/- Only</h4>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                        <div class="container-fluid">
                                                        <a href="/pizza/public/select" class="btn btn-primary btn-block text-center">Order Now</a>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <div class="col-md-4">
                                <div class="card mb-4 shadow-sm text-center">
                                        <img class="card-img-top" src="/pizza/storage/images/t502.jpg" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" data-holder-rendered="true">
                                        <div class="card-body">
                                                <div class="card-text">
                                                        <h2 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Medium New York Pizza</h2>
                                                        <p>Ratings</p>
                                                        <h3>4.7/5</h3>
                                                        <h4>@ 199/- Only</h4>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                        <div class="container-fluid">
                                                        <a href="/pizza/public/select" class="btn btn-primary btn-block text-center">Order Now</a>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <div class="col-md-4">
                                <div class="card mb-4 shadow-sm text-center">
                                        <img class="card-img-top" src="/pizza/storage/images/t503.jpg" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" data-holder-rendered="true">
                                        <div class="card-body">
                                                <div class="card-text">
                                                        <h2 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Large New York Pizza</h2>
                                                        <p>Ratings</p>
                                                        <h3>4.6/5</h3>
                                                        <h4>@ 299/- Only</h4>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                        <div class="container-fluid">
                                                                <a href="/pizza/public/select" class="btn btn-primary btn-block text-center">Order Now</a>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                <hr>
                <div class="row container-fluid">
                        <div class="jumbotron text-center col-md-12">
                                <h1>Non-Veg New York Pizza</h1>
                        </div>
                </div>
                <div class="row">
                        <div class="col-md-4">
                                <div class="card mb-4 shadow-sm text-center">
                                        <img class="card-img-top" src="/pizza/storage/images/t511.jpg" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" data-holder-rendered="true">
                                                <div class="card-body">
                                                        <div class="card-text">
                                                                <h2 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Small New York Pizza</h2>
                                                                <p>Ratings</p>
                                                                <h3>4.1/5</h3>
                                                                <h4>@ 99/- Only</h4>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                                <div class="container-fluid">
                                                                <a href="/pizza/public/select" class="btn btn-primary btn-block text-center">Order Now</a>
                                                                </div>
                                                        </div>
                                                </div>
                                </div>
                        </div>
                        <div class="col-md-4">
                                <div class="card mb-4 shadow-sm text-center">
                                        <img class="card-img-top" src="/pizza/storage/images/t512.jpg" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" data-holder-rendered="true">
                                                <div class="card-body">
                                                        <div class="card-text">
                                                                <h2 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Medium New York Pizza</h2>
                                                                <p>Ratings</p>
                                                                <h3>4.8/5</h3>
                                                                <h4>@ 199/- Only</h4>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                                <div class="container-fluid">
                                                                <a href="/pizza/public/select" class="btn btn-primary btn-block text-center">Order Now</a>
                                                                </div>
                                                        </div>
                                                </div>
                                </div>
                        </div>
                        <div class="col-md-4">
                                <div class="card mb-4 shadow-sm text-center">
                                        <img class="card-img-top" src="/pizza/storage/images/t513.jpg" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" data-holder-rendered="true">
                                        <div class="card-body">
                                                <div class="card-text">
                                                        <h2 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Large New York Pizza</h2>
                                                        <p>Ratings</p>
                                                        <h3>4.2/5</h3>
                                                        <h4>@ 299/- Only</h4>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                        <div class="container-fluid">
                                                        <a href="/pizza/public/select" class="btn btn-primary btn-block text-center">Order Now</a>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</div>  
@endauth 
@endsection