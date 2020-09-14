@extends('layouts.admin')

@section('content')

<div class="card-body">
  <h3>Your Order</h3>
 
@foreach ($carts as $cart)
  
  <div>
    <h5>Item Name: {{$cart->name}}</h5>
    <h4>Price: {{$cart->orginal_price}}</h4>
  </div>
    <hr/>

@endforeach
    <hr/>

    <div><h2><b>Total Price: {{$total}}</b></h2></div>

</div>

{{  Form::open( array('url' => action('OrderController@store'), 'method'=>'post', 'id'=>'quickForm') )  }}

                <div class="card-body">
                  <div><h2>Order Customer Info</h2></div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email Address</label>
                    <input type="text" name="email" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Name of Customer</label>
                    <input type="text" name="customer_name" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="address" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="tel" name="phone" class="form-control" required>
                  </div>
                </div>

                <div class="card-body">
                  <div><h2>Payment Details</h2></div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Name on Card</label>
                    <input type="text" name="card_name" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Expiration Date</label>
                    <input type="date" name="card_date" class="form-control" required>
                  </div>

                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Place Order</button>
                </div>

{{ Form::close() }}


@endsection





