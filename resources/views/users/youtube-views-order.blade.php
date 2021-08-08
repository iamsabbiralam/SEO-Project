@extends('layouts.app')
@section('title', 'Youtube Views Order')

@section('content')

    <!--header section start-->
    <section class="hero-section ptb-100 gradient-overlay"
             style="background: url('img/header-bg-5.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">Youtube Views Order</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                <li class="list-inline-item breadcrumb-item active">Youtube Views Order</li>
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
                        <h2 class="text-left">Buy Youtube Views</h2>
                        <form action="" method="">
                            <div class="form-group">
                                <label class="d-block mb-2 text-dark text-left">Youtube Video URL *</label>
                                <input class="form-control w-50" type="text" name="fb_user_name" placeholder="https://www.youtube.com/watch?v=j-kKJKlufBQ">
                            </div>
                            <div class="form-group">
                                <label class="d-block mb-2 text-dark text-left">Youtube Views *</label>
                                <select class="form-control w-50" id="select_box">
                                    <option value="">Please Select</option>
                                    <option value="₦3000">1000 Views</option>
                                    <option value="₦12000">5000 Views</option>
                                    <option value="₦20000">10000 Views</option>
                                    <option value="₦40000">20000 Views</option>
                                    <option value="₦60000">30000 Views</option>
                                </select>
                                
                            </div>
                            <div class="order-price mt-5">
                                <h4 class="text-left">Price: <input class="form-control d-inline w-25 text-danger text-center" type="text" value="₦0.00" id="show_only" disabled=""></h4>
                            </div>
                            <div class="form-group text-left">
                                <button type="submit" class="btn secondary-solid-btn mt-3" style="pointer-events: all; cursor: pointer;">
                                        Order Now
                                    </button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact us promo end-->

@endsection