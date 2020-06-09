@extends('layouts.app')
@section('content')
<hr>
<div class="card bg-light text-center">
    <div class="card-body"><h1>Welcome!  {{ Auth::user()->name }}</h1>    
    </div>
    
</div>
<br><br><br>
<h3 class="container">Your Orders</h3>
<hr>
<div class="container">
    @if(count($order) > 0)
        <table class="table">
            <thead class="bg-primary">
                <tr>
                    <th><h3>Order Category</h3></th>
                    <th><h3>Order Type</h3></th>
                    <th><h3>Order Size</h3></th>
                    <th><h3>Order Quantity</h3></th>
                    <th><h3>Delete Order</h3></th>
                </tr>
            </thead>
            @foreach ($order as $rec)
                <tr>
                    <td><h4>{{ $rec->category }}</h4></td>
                    <td><h4>{{ $rec->type }}</h4></td>
                    <td><h4>{{ $rec->size }}</h4></td>
                    <td><h4>{{ $rec->quantity }}</h4></td>
                    <td>
                        <a class="btn btn-danger" href="/pizza/public/order/delete/{{$rec->id}}" onclick="return confirm('Do You Finally want to remove it from Orders')">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
    <h1>Oops! Your It Seems that you have not Ordered any thing</h1>
    @endif
</div>
@endsection
