@extends('layouts.admin')
@section('title', 'User Details')

@section('container')

<!-- Content Wrapper. Contains page content -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User Details</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Admin</a></li>
              <li class="breadcrumb-item active">Users</li>
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
                        <!-- /.card-header -->
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>                                    
			                                    <th>User Name</th>
			                                    <th>User Email</th>
			                                    <th>Status</th>
			                                </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $user)
		                                    <tr>                                        
		                                        <td>{{ $user->name }}</td>
		                                        <td>{{ $user->email }}</td>
		                                        <td>{{ "Active" }}</td>
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