@extends('layouts.app')
@section('content')
@auth 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
            <form method="POST" action="/pizza/public/select">
                @csrf
                    <fieldset>
                        <hr>
                        <h1 class="text-xs-center header" style="color:darkcyan;">Select your Order</h1>
                        <hr>
                        <div class="form-group">
                            <label for="category"><h4>PIZZA CATEGORY:</h4></label>
                            <select class="form-control" id="category" name="category">
                                <option>Margherita Pizza</option>
                                <option>Neapolitan Pizza</option>
                                <option>California Pizza</option>
                                <option>Greek Pizza</option>
                                <option>New York Pizza</option>
                                <option>Sicilian Pizza</option>
                            </select>
                        </div>
                        <div class="form-group">
                                <label for="type"><h4>PIZZA TYPE:</h4></label>
                                <select class="form-control" id="type" name="type">
                                    <option>Veg</option>
                                    <option>Non-Veg</option>
                                </select>
                        </div>
                        <div class="form-group">
                                <label for="size"><h4>PIZZA SIZE:</h4></label>
                                <select class="form-control" id="size" name="size">
                                    <option>Small 99/-Rs</option>
                                    <option>Medium 199/-Rs</option>
                                    <option>Large 299/-Rs</option>
                                </select>
                    </div>
                        <div class="form-group">
                                <label for="quantity"><h4>PIZZA QUANTITY:</h4></label>
                                <input  class="form-control" type="number" name="quantity">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary btn-lg col-md-2" onclick="return alert('Your Order Has Been Successfully Added. Thank you! For Choosing Us...')">Submit</button>
                            <a href="/pizza/public/menu" class="form-control btn btn-primary btn-lg col-md-2">Back to Menu</a>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<hr>
    <hr>
@endauth
@endsection