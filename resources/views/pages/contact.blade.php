@extends('layouts.app')
@section('content')

<div class="contaner-fluid">
        
        <div class="jumbotron text-center">
            <h1>Contact Us- Pizzy's Costumer Care</h1>
        
        <hr>
        <img class="card-img-top" src="/pizza/storage/images/ct1.jpg" style="height:500px;">
    </div>
<hr>
</div>
<div class="container">
    <div class="thumbnail">
        <h2> Pizzy's Customer Care Number</h2>
        <h4 style="color:green;">1860-210-0000</h4>
    </div>
</div>
<hr>
<div class="container">
        <div class="thumbnail">
            <h2> Pizzy's Contact Address</h2>
            <br>
            <h4 style="color:darkblue;">Pizzy's Pizza India,</h4>
            <h4 style="color:darkblue;">Tower-D,Plot-5,</h4>
            <h4 style="color:darkblue;">5th Floor,Logix Techno Park,</h4>
            <h4 style="color:darkblue;">Ground Floor,Timmy Arcade,</h4>
            <h4 style="color:darkblue;">Secotor 127, Noida-201305,U.p.</h4>
            
        </div>
    </div>
<hr>

<div class="card bg-info text-white">
    <div class="card-body"><h1>Write to Us</h1></div>
</div>
<hr>
<div class="alert alert-info">
    <strong>Have any feedback or queries?</strong>
    <p>We'd love to hear from you. Write to us at guestcarepizzy@jubifood.com</p>
</div>
<hr>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                <form method="POST" action="/pizza/public/contact">
                    @csrf
                        <fieldset>
                            <h1 class="text-xs-center header" style="color:darkcyan;">Contact us</h1>
    
                            <div class="form-group">
                                <div class="col-md-8">
                                    <input id="fname" name="fname" type="text" placeholder="First Name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8">
                                    <input id="lname" name="lname" type="text" placeholder="Last Name" class="form-control">
                                </div>
                            </div>
    
                            <div class="form-group">
                                <div class="col-md-8">
                                    <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                                </div>
                            </div>
    
                            <div class="form-group">
                                <div class="col-md-8">
                                    <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                                </div>
                            </div>
    
                            <div class="form-group">
                                <div class="col-md-8">
                                    <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
                                </div>
                            </div>
    
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-primary btn-lg col-md-2" onclick="return alert('Thank You! Your Query Has Been Successfully Sent To Us. We will get back to you within 2 business days')">
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
<hr>

<div class="card bg-secondary text-white">
    <div class="card-body"><h4>Find your nearest Outlet</h4></div>
</div>
<hr>
<div class="container">
    <p>
        Try our delicious treats and Rescue hunger with #Pizzy's Pizza.
    <strong>Locate Nearby Pizza Restaurants</strong> nearest to you.
    </p>
</div>
<hr>
<div class="container">
<h4>Connect With Us</h4>
<p>Follow us to see updates, industry news, latest offers and glimpses into the culture and activities at Pizzy</p>
</div>
<div class="text-center">
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
</div>
<br>
<br>
<br>
@endsection