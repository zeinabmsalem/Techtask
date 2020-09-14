@extends('layouts.admin')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@section('content')

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Products Table</h3>
                <a href="/product"><button style="margin-left: 800px; width: 80px;" class="btn btn-danger">Back</button></a>
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

                  <tr>

                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->code }}</td>
                    <td>{{ $product->orginal_price }}</td>
                    <td>{{ $product->sale_price }}</td>
                    <td>{{ $product->brand_name }}</td>                    
                    <td>{{ $product->color }}</td>
                    <td>{{ $product->description}}</td>
                    <td>{{ $product->category_name }}</td>                                                                                
                    <td>                    
                    <a href="/add_to_cart/{{ $product->id }}"><button class="btn btn-success" id="cart">Add to Cart</button></a>
                    </td>
                  </tr>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

@endsection


@section('add_javascript')

{{-- <script>

  var counter = 0;
  onclick="add_item({{ $product->id }});"
function add_item (product_id) {
  
  // alert(product_id);

  counter++;

  alert(counter);

}

</script> --}}

@endsection
