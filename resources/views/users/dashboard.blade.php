@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
<!--header section start-->
    <section class="hero-section ptb-100 gradient-overlay"
             style="background: url('img/header-bg-5.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">Welcome {{ $user->name }}</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                <li class="list-inline-item breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--header section end-->

    <!--contact us promo start-->
    <section class="contact-us-promo pt-100">
        @foreach($orders as $order)
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-12">
                    <div class="card card-2">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body my-auto text-right">
                                    <div class="row my-auto flex-column flex-md-row">
                                        <div class="col-auto my-auto">
                                            <h5 class="mb-0"><b>Order Name: </b>{{ $order->name }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div><hr class="my-3 ">
                            <div class="media">
                                <div class="media-body my-auto text-right">
                                    <div class="row my-auto flex-column flex-md-row">
                                        <div class="col-auto my-auto"> <small><b>Profile link : </b>{{ $order->link }}</small></div>
                                        <div class="col my-auto"> <small><b>Quantity : </b>{{ $order->quantity }}</small></div>
                                        <div class="col my-auto">
                                            <h6 class="mb-0">{{ $order->price }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-3 ">
                            <div class="row">
                                <div class="col-md-3 mb-3"> <small> Order Status <span><i class=" ml-2 fa fa-refresh" aria-hidden="true"></i></span></small> </div>
                                <div class="col mt-auto">
                                    @if($order->status == "cancel")
                                    <div class="col-md-3 mb-3"><b style="color: red;">Cancel</b><span> <i class="fa fa-circle"></i></span></div>
                                    @else
                                    <div class="progress my-auto">
                                        <div class="progress-bar progress-bar rounded" @if($order->status == "pending") style="width: 10%" @else style="width: 100%" @endif role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="media row justify-content-between ">
                                        <div class="col-auto text-right"><span> <small class="text-right mr-sm-2">Pending</small> <i class="fa fa-circle active"></i> </span></div>
                                        <div class="col-auto flex-col-auto"><small class="text-right mr-sm-2">Approved</small><span> <i class="fa fa-circle"></i></span></div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </section>
    <!--header section end-->
    <section class="contact-us-promo pt-100">
    </section>
@endsection