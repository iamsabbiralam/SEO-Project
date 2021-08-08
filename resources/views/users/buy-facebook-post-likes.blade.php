@extends('layouts.app')
@section('title', 'Buy Faceboook Post Likes')

@section('content')

    <!--header section start-->
    <section class="hero-section ptb-100 gradient-overlay"
             style="background: url('img/header-bg-5.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">Buy Faceboook Post Likes</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                <li class="list-inline-item breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="list-inline-item breadcrumb-item active">Buy Faceboook Post Likes</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--header section end-->

     <!--pricing with switch section start-->
    <section id="pricing-section" class="pricing-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <strong class="color-secondary">Our Pricing</strong>
                        <h2>Facebook Post Likes Price</h2>
                        <span class="animate-border mr-auto ml-auto mb-4"></span>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between mb-5">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card text-center single-pricing-pack">
                        <div class="price-img pt-5">
                            <img src="img/fb-logo.png" alt="price" width="120" class="img-fluid">
                        </div>
                        <div class="card-header py-4 border-0 pricing-header">
                            <div class="price text-center mb-0 monthly-price">₦1000</div>
                        </div>
                        <div class="price-name">
                            <h5 class="mb-0">BUY 100 FB Post Likes</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li><span>High Quality users</span></li>
                                <li>100% Safe</li>
                                <li>24/7 Support</li>
                                <li><span>High Retention Rate</span></li>
                                <li>Engaging Users</span></li>
                            </ul>
                            <a href="{{ route('facebook_post_likes_order') }}" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card text-center single-pricing-pack">
                        <div class="price-img pt-5">
                            <img src="img/fb-logo.png" alt="price" width="120" class="img-fluid">
                        </div>
                        <div class="card-header py-4 border-0 pricing-header">
                            <div class="price text-center mb-0 monthly-price">₦4000</div>
                        </div>
                        <div class="price-name">
                            <h5 class="mb-0">BUY 500 FB Post Likes</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li><span>High Quality users</span></li>
                                <li>100% Safe</li>
                                <li>24/7 Support</li>
                                <li><span>High Retention Rate</span></li>
                                <li>Engaging Users</span></li>
                            </ul>
                            <a href="{{ route('facebook_post_likes_order') }}" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card text-center single-pricing-pack">
                        <div class="price-img pt-5">
                            <img src="img/fb-logo.png" alt="price" width="120" class="img-fluid">
                        </div>
                        <div class="card-header py-4 border-0 pricing-header">
                            <div class="price text-center mb-0 monthly-price">₦7000</div>
                        </div>
                        <div class="price-name">
                            <h5 class="mb-0">BUY 1000 FB Post Likes</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li><span>High Quality users</span></li>
                                <li>100% Safe</li>
                                <li>24/7 Support</li>
                                <li><span>High Retention Rate</span></li>
                                <li>Engaging Users</span></li>
                            </ul>
                            <a href="{{ route('facebook_post_likes_order') }}" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row align-items-center justify-content-between">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card text-center single-pricing-pack">
                        <div class="price-img pt-5">
                            <img src="img/fb-logo.png" alt="price" width="120" class="img-fluid">
                        </div>
                        <div class="card-header py-4 border-0 pricing-header">
                            <div class="price text-center mb-0 monthly-price">₦25000</div>
                        </div>
                        <div class="price-name">
                            <h5 class="mb-0">BUY 5000 FB Post Likes</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li><span>High Quality users</span></li>
                                <li>100% Safe</li>
                                <li>24/7 Support</li>
                                <li><span>High Retention Rate</span></li>
                                <li>Engaging Users</span></li>
                            </ul>
                            <a href="{{ route('facebook_post_likes_order') }}" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card text-center single-pricing-pack">
                        <div class="price-img pt-5">
                            <img src="img/fb-logo.png" alt="price" width="120" class="img-fluid">
                        </div>
                        <div class="card-header py-4 border-0 pricing-header">
                            <div class="price text-center mb-0 monthly-price">₦50000</div>
                        </div>
                        <div class="price-name">
                            <h5 class="mb-0">BUY 10000 FB Post Likes</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li><span>High Quality users</span></li>
                                <li>100% Safe</li>
                                <li>24/7 Support</li>
                                <li><span>High Retention Rate</span></li>
                                <li>Engaging Users</span></li>
                            </ul>
                            <a href="{{ route('facebook_post_likes_order') }}" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card text-center single-pricing-pack">
                        <div class="price-img pt-5">
                            <img src="img/fb-logo.png" alt="price" width="120" class="img-fluid">
                        </div>
                        <div class="card-header py-4 border-0 pricing-header">
                            <div class="price text-center mb-0 monthly-price">Customize package</div>
                        </div>
                        <div class="price-name">
                            <h5 class="mb-0">BUY 10000 + FB Post Likes</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li><span>High Quality users</span></li>
                                <li>100% Safe</li>
                                <li>24/7 Support</li>
                                <li><span>High Retention Rate</span></li>
                                <li>Engaging Users</span></li>
                            </ul>
                            <a href="{{ route('facebook_post_likes_order') }}" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <div class="action-btns mt-5">
                        <a href="{{ route('facebook_post_likes_order') }}" class="btn secondary-solid-btn px-5">CLICK HERE TO SEE MORE PLANS</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--pricing with switch section end-->

 <!--call to action section start-->
    <section class="call-to-action py-5 gray-light-bg">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                <div class="col-md-7">
                    <div class="subscribe-content">
                        <h3 class="mb-1">Contact V.S.L CONCEPTS ENGAGMENT HUB</h3>
                        <p>V.S.L ENGAGMENT HUB is a network that will help you Increase Your Social Media Growth Instantly.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="action-btn text-lg-right text-sm-left">
                        <a href="contact-us.php" class="btn secondary-solid-btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--call to action section end-->

@endsection