@extends('layouts.admin')

@section('content')

{{  Form::open( array('route' => ['product.update', $product->id], 'method'=>'post', 'id'=>'quickForm') )  }}

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Code</label>
                    <input type="text" name="code" class="form-control" value="{{ $product->code }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Original Price</label>
                    <input type="text" name="orginal_price" class="form-control" value="{{ $product->orginal_price }}">
                  </div>                                    
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Sale Price</label>
                    <input type="text" name="sale_price" class="form-control" value="{{ $product->sale_price }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Brand Name</label>
                    <input type="text" name="brand_name" class="form-control"value="{{ $product->brand_name }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Color</label>
                    <input type="text" name="color" class="form-control" value="{{ $product->color }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" name="description" class="form-control" value="{{ $product->description }}">
                  </div>                   


                  <!-- select -->
                  <div class="form-group">
                        <label>Category Name</label>
                        <select class="form-control" name="category">

                         <option value="{{$product->category_name}}">{{$product->category_name}}</option>

                          @foreach ($categories as $category)

                          @if ($category->category_name != $product->category_name)
                          
                           <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                          @endif

                          @endforeach

                        </select>
                      </div>                                                                       
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Update Product</button>
                </div>

{{ Form::close() }}

@endsection