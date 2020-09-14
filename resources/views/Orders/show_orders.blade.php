@extends('layouts.admin')

@section('content')

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Orders Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Order Number</th>
                    <th>Placed By</th>       
                                                                                                                         
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

              @foreach ($orders as $order)
                  <tr>

                    <td>{{ $order->id }}</td>
                    <td>{{ $order->customer_name }}</td>
                                                                                                    
                    <td><a href="/order/{{$order->id}}/"><button class="btn btn-primary">Order Details</button></a>
                    </td>
                  </tr>

              @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

@endsection
