@extends('layouts.admin')

@section('content')

@if ($total != 0)

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Cart Items</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Code</th>
                    <th>Original Price</th>
                    <th>Sale Price</th>
                    <th>Brand Name</th>
                    <th>Color</th>
                    <th>Description</th>   
                    <th>Category</th> 
                    <th>Action</th>                                           
                  </tr>
                  </thead>
                  <tbody>

                @foreach ($carts as $cart)

                  <tr>

                    <td>{{ $cart->id }}</td>
                    <td>{{ $cart->name }}</td>
                    <td>{{ $cart->code }}</td>
                    <td>{{ $cart->orginal_price }}</td>
                    <td>{{ $cart->sale_price }}</td>
                    <td>{{ $cart->brand_name }}</td>
                    <td>{{ $cart->color }}</td>
                    <td>{{ $cart->description }}</td>
                    <td>{{ $cart->category_name }}</td>

                    <td><a href="/show_cart/{{$cart->id}}" onclick="return confirm('Are you sure?')"><button class="btn btn-danger">Delete</button></a>
</td>                                                                                
                  </tr>

                @endforeach

                  </tbody>
                </table>
                
              </div>
              <!-- /.card-body -->
                 <h5 style="margin-left: 800px;">Total Price:  EGP {{ $total }}</h5>
            </div>
              
            <a href="/order" style="margin-left: 500px;"><button class="btn btn-success">Continue to Checkout</button></a>
             <a href="/product"><button class="btn btn-primary">Continue Shopping</button></a>

@else
  
    <h1 class="card-body" style="margin-left: 400px; margin-top: 100px;">Cart is Empty!</h1>

@endif




@endsection





