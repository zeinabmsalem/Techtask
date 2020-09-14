@extends('layouts.admin')

@section('content')

{{  Form::open( array('url' => action('ProductController@store'), 'method'=>'post', 'id'=>'quickForm', 


                              'enctype'=>'multipart/form-data' ) )  }}


                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" name="name" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Code</label>
                    <input type="number" name="code" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Original Price</label>
                    <input type="number" name="orginal_price" class="form-control" required>
                  </div>                                    
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Sale Price</label>
                    <input type="number" name="sale_price" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Brand Name</label>
                    <input type="text" name="brand_name" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Color</label>
                    <input type="text" name="color" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" name="description" class="form-control" required>
                  </div>
{{--                   <div class="form-group">
                    <label for="exampleInputEmail1">Product Image</label>
                    <input type="file" name="image" id="image" class="form-control" required>
                  </div> --}}

                      <!-- select -->
                      <div class="form-group">
                        <label>Category Name</label>
                        <select class="form-control" name="category" required>
                         <option disabled selected value> -- --- -- -- -- -- </option>

                          @foreach ($categories as $category)

                          <option value="{{$category->id}}">{{$category->category_name}}</option>

                          @endforeach

                        </select>
                      </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Add Product</button>
                </div>

{{ Form::close() }}

@endsection
