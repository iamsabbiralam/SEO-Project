@extends('admin/layout')
@section('page_title','Dashboard')

@section('container')

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard v2</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">CPU Traffic</span>
                <span class="info-box-number">
                  10
                  <small>%</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                @php
                $fav = DB::table('favourites')->orderby('id', 'desc')->get();
                @endphp
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">{{ count($fav) }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                @php
                $order = DB::table('orders')->orderby('id', 'desc')->get();
                @endphp
                <span class="info-box-text">Total Sales</span>
                <span class="info-box-number">{{ count($order) }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                @php
                $user = DB::table('users')->where('user_type', 'user')->orderby('id', 'desc')->get();
                @endphp
                <span class="info-box-text">New Members</span>
                <span class="info-box-number">{{ count($user) }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-12">
                <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Latest Orders</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Order ID</th>
                      <th>Product Name</th>
                      <th>Size</th>
                      <th>Flavour</th>
                      <th>Quantiy</th>
                      <th>Price</th>
                      <th>Total</th>
                    </tr>
                    </thead>
                    @php
                    $order = DB::table('orders')->orderby('id', 'desc')->limit('8')->get();
                    @endphp
                    @foreach($order as $o)
                    @php
                    $pro = DB::table('products')->where('id', $o->product_id)->first();
                    @endphp
                    @if($pro)
                    <tbody>
                    <tr>
                      <td>
                        {{ $o->id }}
                      </td>
                      <td>
                        {{ $pro->product_name }}
                      </td>
                      <td>
                          @if($o->size_id)
                          @php
                          $size = DB::table('sizes')->where('id', $o->size_id)->first();
                          @endphp
                          <span class="badge badge-success">{{ $size->size }}</span>
                          @endif
                      </td>
                      <td>
                        @if($o->flavour_id)
                        @php
                        $flavour = DB::table('flavours')->where('id', $o->flavour_id)->first();
                        @endphp
                        <span class="badge badge-success">{{ $flavour->flavour }}</span>
                        @endif
                      </td>
                      <td>{{ $o->quantity }}</td>
                      <td>{{ $o->selling_price }}</td>
                      <td>{{ $o->total_price }}</td>
                    </tr>
                    </tbody>
                    @endif
                    @endforeach
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="{{ route('orders') }}" class="btn btn-sm btn-secondary float-right">View All Orders</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

           <!-- user list -->
           <div class="card col-md-8">
                  <div class="card-header">
                    <h3 class="card-title">Latest Members</h3>
                    @php
                    $user = DB::table('users')->where('user_type', 'user')->orderby('id', 'desc')->limit('8')->get();
                    @endphp
                    <div class="card-tools">
                      <span class="badge badge-danger">{{ count($user) }} New Members</span>
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <ul class="users-list clearfix">
                    @foreach($user as $u)
                      <li>
                        @if(!$u->profile_photo_path)
                        <img src="{{ asset('storage/profile-photos/dp.jpg') }}" alt="User Image" style="height:80px;width:80px">
                        @else
                        <img src="{{ asset('storage/'.$u->profile_photo_path) }}" alt="User Image" style="height:80px;width:80px">
                        @endif
                        <a class="users-list-name" href="#">{{ $u->name }}</a>
                        <span class="users-list-date">{{ $u->created_at }}</span>
                      </li>
                    @endforeach
                    </ul>
                    <!-- /.users-list -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <a href="{{ route('users') }}">View All Users</a>
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!--/.card -->
          </div>
          <!-- /.col -->

          <div class="col-md-4">
            <!-- PRODUCT LIST -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Recently Added Products</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">
                @php
                $pro = DB::table('products')->orderby('id','desc')->limit('5')->get();
                @endphp
                @foreach($pro as $p)
                  <li class="item">
                    <div class="product-img">
                      <img src="{{ asset('storage/images/product/'.$p->image) }}" alt="Product Image" class="img-size-50">
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title">{{ $p->product_name }}
                        <span class="badge badge-warning float-right">{{ $p->selling_price }}</span></a>
                      <span class="product-description">
                        {{ $p->description }}
                      </span>
                    </div>
                    @endforeach
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
                <a href="{{ route('view_product') }}" class="uppercase">View All Products</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
            <!-- end product list -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection