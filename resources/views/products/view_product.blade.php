@extends('layouts.admin')

{{-- @section('filter')

       <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="/helo">
          Filter by: &nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-angle-double-down"></i> 
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>

          @foreach ($products as $product)
          <a href="/filter_category/{{$product->category_name}}" class="dropdown-item">
            <i class="fa fa-shopping-basket mr-2"></i>&nbsp;&nbsp;&nbsp;&nbsp;Category
         </a>
          <div class="dropdown-divider"></div>
          <a href="filter_price/{{$product->sale_price}}" class="dropdown-item">
            <i class="fas fa-users mr-2"></i>&nbsp;&nbsp;&nbsp;&nbsp;Sale Price
          </a>
          <div class="dropdown-divider"></div>
          <a href="/filter_color/{{$product->color}}" class="dropdown-item">
            <i class="fas fa-file mr-2"></i>&nbsp;&nbsp;&nbsp;&nbsp;Color
          </a>

          @endforeach

          <div class="dropdown-divider"></div>
        </div>
      </li>

@endsection --}}

@section('content')

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Products Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Original Price</th>
                    <th>Sale Price</th>
                    <th>Brand</th>
                    <th>Color</th>
                    <th>Description</th>   
                    <th>Category</th>                                            
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

              @foreach ($products as $product)
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
                    <td><a href="/product/{{$product->id}}/edit"><button class="btn btn-primary">Edit</button></a>
                    &nbsp;&nbsp;
                    <a href="/product/destroy/{{ $product->id }}"><button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button></a>
                    &nbsp;&nbsp;
                    <br/>
                    <a href="/product/{{ $product->id }}"><button class="btn btn-success">Show Product</button></a>
                   {{--  &nbsp;&nbsp;                    
                    <a href="/add_to_cart/{{ $product->id }}"><button class="btn btn-success">Add to Cart</button></a> --}}
                    </td>
                  </tr>

              @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

@endsection
