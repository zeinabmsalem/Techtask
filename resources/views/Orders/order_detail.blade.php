@extends('layouts.admin')

@section('content')

<div class="card-body">

@foreach ($carts as $cart)
 
                  <div class="form-group">
                    <h1>Item Name: {{ $cart->name}}</h1>
                    <h3>Item Description: {{ $cart->description}}</h3>

                    <h4>Item Price: {{ $cart->orginal_price}}</h4> 
                  </div>
                  <hr/>

@endforeach

                    <h1>Total price: {{$total}}</h1>                 


</div>               



@endsection
