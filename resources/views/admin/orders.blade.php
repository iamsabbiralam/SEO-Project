@extends('layouts.admin')
@section('title', 'Order Details')

@section('container')

<!-- Content Wrapper. Contains page content -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Order Details</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Admin</a></li>
              <li class="breadcrumb-item active">Orders</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>



    @if ($errors->any())
    &nbsp; <br><br>
    <center>
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </center>
    @endif

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>                                    
			                                    <th>Order Name</th>
			                                    <th>Link</th>
			                                    <th>Quantity</th>
			                                    <th>Price</th>
			                                    <th>Status</th>
			                                </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($orders as $order)
		                                    <tr>                                        
		                                        <td>{{ $order->name }}</td>
		                                        <td>{{ $order->link }}</td>
		                                        <td>{{ $order->quantity }}</td>
		                                        <td>{{ $order->price }}</td>
		                                        <td>{{ $order->status }}</td>
		                                    </tr>
		                               		@endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>

    @endsection