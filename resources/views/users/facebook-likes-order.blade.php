@extends('layouts.app')
@section('title', 'Facebook Likes Order')

@section('content')

    <!--header section start-->
    <section class="hero-section ptb-100 gradient-overlay"
             style="background: url('img/header-bg-5.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">Facebook Likes Order</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                <li class="list-inline-item breadcrumb-item active">Facebook Likes Order</li>
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
                        <h2 class="text-left">Buy Facebook likes</h2>
                        <form action="users/order_process.php" method="post">
                            <input type="hidden" name="name" value="facebook_likes" required>
                            <div class="form-group">
                                <label class="d-block mb-2 text-dark text-left">Facebook User Name *</label>
                                <input class="form-control w-50" type="text" name="user_name" placeholder="Enter your facebook user Name" required>
                            </div>
                            <div class="form-group">
                                <label class="d-block mb-2 text-dark text-left">Facebook Link *</label>
                                <input class="form-control w-50" type="text" name="link" placeholder="https://www.facebook.com/vslengagementhub-104330467731189/" required>
                            </div>
                            <div class="form-group">
                                <label class="d-block mb-2 text-dark text-left" required>Facebook Likes *</label>
                                <select class="form-control w-50" id="likes" name="likes">
                                    <option value="">Please Select</option>
                                    <option value="1000">1000 Likes</option>
                                    <option value="2000">2000 Likes</option>
                                    <option value="5000">5000 Likes</option>
                                    <option value="10000">10000 Likes</option>
                                    <option value="20000">20000 Likes</option>
                                    <option value="25000">25000 Likes</option>
                                    <option value="30000">30000 Likes</option>
                                    <option value="0">Other</option>
                                </select>
                                
                            </div>
                            <div class="pay">

                            </div>
                            <div class="form-group">
                                <h4 class="text-left">Price: <input class="form-control d-inline w-25 text-danger text-center" type="text" name="price" value="₦0.00" id="show_only" readonly required></h4>
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