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
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-12">
                    <div class="section-heading text-white text-center mb-5">
                        <h2 class="text-left">Orders</h2>
                        <table class="content">
                            <center>
                                <tr>                                    
                                    <th>Order Name</th>
                                    <th>Link</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                </tr>

                                
                                    <tr>                                        
                                        <td>name</td>
                                        <td>link</td>
                                        <td>likes</td>
                                        <td>price</td>
                                        <td>status</td>
                                    </tr>
                                
                            </center>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact us promo end-->
@endsection