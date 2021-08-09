@extends('layouts.app')
@section('title', 'About Us')

@section('content')

    <!--header section start-->
    <section class="hero-section ptb-100 gradient-overlay"
             style="background: url('img/header-bg-5.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">About Us</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                <li class="list-inline-item breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="list-inline-item breadcrumb-item active">About Us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--header section end-->

    <!--promo section start-->
    <section class="promo-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="promo-single-wrap p-5 text-center custom-shadow rounded">
                        <div class="promo-icon mb-4">
                            <i class="ti-dashboard"></i>
                            <span class="number-bg">01</span>
                        </div>
                        <div class="promo-info">
                            <h5>Quick success</h5>
                            <p>Don’t want to waste years trying to grow your page followers? Just buy yours.<br><br><br></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="promo-single-wrap p-5 text-center custom-shadow rounded">
                        <div class="promo-icon mb-4">
                            <i class="ti-pulse"></i>
                            <span class="number-bg">02</span>
                        </div>
                        <div class="promo-info">
                            <h5>Better Facebook ranking.</h5>
                            <p>The more followers your page has the more Facebook algorithm will promote your page and the better rankings.<br><br></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="promo-single-wrap p-5 text-center custom-shadow rounded">
                        <div class="promo-icon mb-4">
                            <i class="ti-vector"></i>
                            <span class="number-bg">03</span>
                        </div>
                        <div class="promo-info">
                            <h5>More publicity.</h5>
                            <p>Purchasing the followers makes more people see your page and thus marketing your page/business/company or the products you are selling.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--promo section end-->

    <!--about us section start-->
    <section class="about-us-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="about-us-img">
                        <img src="img/why-choose-me-img.jpg" alt="about us" class="img-fluid about-single-img">
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="about-us-content-wrap">
                        <strong class="color-secondary">About Us</strong>
                        <h3>Why  V.S.L CONCEPTS ENGAGMENT HUB?</h3>
                        <span class="animate-border mb-4"></span>
                        <ul class="list-unstyled tech-feature-list">
                            <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span>We are the <strong>leaders</strong> in the field of social media marketing/promotion
                            </li>
                            <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span>Our services are 100% BOTS free. In other words we provide 100% results from real people.
                            </li>
                            <li class="py-1"><span
                                    class="ti-control-forward mr-2 color-secondary"></span>We give you instant payout of your earnings.
                            </li>
                            <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span>We have more than <strong>5,706,000</strong> active users in Nigeria
                            </li>
                            <li class="py-1"><span
                                    class="ti-control-forward mr-2 color-secondary"></span>We have <strong>user friendly</strong> interface
                            </li>
                            <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span>We have <strong>fast</strong> Support (English only)
                            </li>
                            <li class="py-1"><span
                                    class="ti-control-forward mr-2 color-secondary"></span>We are the only platform in Nigeria that will pay you to perform social media tasks.
                            </li>
                            <li class="py-1"><span
                                    class="ti-control-forward mr-2 color-secondary"></span>Over 55 million naira payout.
                            </li>
                        </ul>
                        <div class="row mt-4">
                            <div class="col-4">
                                <div class="counter-single">
                                    <h2 class="mb-0 color-secondary">199</h2>
                                    <strong>Total Project</strong>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="counter-single">
                                    <h2 class="mb-0 color-secondary">210</h2>
                                    <strong>Total Customer</strong>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="counter-single">
                                    <h2 class="mb-0 color-secondary">180</h2>
                                    <strong>Happy Customer</strong>
                                </div>
                            </div>
                        </div>
                        <div class="action-btns mt-4">
                            <a href="{{ route('register') }}" class="btn secondary-solid-btn mr-3">Start Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about us section end-->

<!--work process section start-->
    <section class="work-process-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9">
                    <div class="section-heading text-center">
                        <strong class="color-secondary">Work Process</strong>
                        <h2>HOW YOU EARN ON THIS PLATFORM ?</h2>
                        <span class="animate-border mr-auto ml-auto mb-4"></span>
                        <p class="lead">We pay you up to ₦300,000 monthly as you genuinely help other users of this network grow their social media accounts. </p>
                    </div>
                </div>
            </div>
            <!-- ============ step 1 =========== -->
            <div class="row mt-5">
                <div class="col-md-12 col-lg-5 process-width">
                    <div class="process-box process-left">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="process-step-number">
                                    <strong>Step</strong>
                                    <h2 class="m-0">01</h2>
                                </div>
                            </div>
                            <div class="col-md-7 process-content">
                                <h5>Signup for free now and Login to your dashboard</h5>
                            </div>
                        </div>
                        <div class="process-line-l"></div>
                    </div>
                </div>
                <div class="col-md-2 process-none"></div>
                <div class="col-md-5 col-md-5 col-lg-5 process-none">
                    <div class="process-point-right"></div>
                </div>
            </div>
            <!-- ============ step 2 =========== -->
            <div class="row">
                <div class="col-md-5 col-lg-5 process-none">
                    <div class="process-point-left"></div>
                </div>
                <div class="col-md-2 process-none"></div>
                <div class="col-md-12 col-lg-5 process-width">
                    <div class="process-box process-right">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="process-step-number">
                                    <strong>Step</strong>
                                    <h2 class="m-0">02</h2>
                                </div>
                            </div>
                            <div class="col-md-7 process-content">
                                <h5>Open the task section on your dashboard</h5>
                            </div>
                        </div>
                        <div class="process-line-r"></div>
                    </div>
                </div>

            </div>
            <!-- ============ step 3 =========== -->
            <div class="row">
                <div class="col-md-12 col-lg-5 process-width">
                    <div class="process-box process-left">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="process-step-number">
                                    <strong>Step</strong>
                                    <h2 class="m-0">03</h2>
                                </div>
                            </div>
                            <div class="col-md-7 process-content">
                                <h5>Perform available tasks to earn </h5>
                            </div>
                        </div>
                        <div class="process-line-l"></div>
                    </div>
                </div>
                <div class="col-md-2 process-none"></div>
                <div class="col-md-5 col-lg-5 process-none">
                    <div class="process-point-right"></div>
                </div>
            </div>
            <!-- ============ step 4 =========== -->
            <div class="row">
                <div class="col-md-5 col-lg-5 process-none">
                    <div class="process-point-left"></div>
                </div>
                <div class="col-md-2 process-none"></div>
                <div class="col-md-12 col-lg-5 process-width">
                    <div class="process-box process-right">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="process-step-number">
                                    <strong>Step</strong>
                                    <h2 class="m-0">04</h2>
                                </div>
                            </div>
                            <div class="col-md-7 process-content">
                                <h5>Request for payout of available earnings  from dashboard </h5>
                            </div>
                        </div>
                        <div class="process-line-r"></div>
                    </div>
                </div>


            </div>
            <!-- ============ step 5 =========== -->
            <div class="row">
                <div class="col-md-12 col-lg-5 process-width">
                    <div class="process-box process-left">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="process-step-number">
                                    <strong>Step</strong>
                                    <h2 class="m-0">05</h2>
                                </div>
                            </div>
                            <div class="col-md-7 process-content">
                                <h5>Receive an alert from your bank</h5>
                            </div>
                        </div>
                        <div class="process-line-l"></div>
                    </div>
                </div>
                <div class="col-md-2 custom-none"></div>
                <div class="col-md-5 col-lg-5 custom-none">
                    <div class="process-point-right process-last"></div>
                </div>
            </div>
            <!-- ============ -->
           
            
        </div>
    </section>
    <!--work process section end-->

    <!--call to action progressbar start-->
    <section class="call-to-action ptb-100" style="background: url('img/ctg-bg-2.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="circle-box">
                        <div class="chart" data-percent="90"><span>90%</span></div>
                    </div>
                    <div class="progress-info text-center mt-3">
                        <strong class="color-secondary">Our Services</strong>
                        <h5 class="text-white">Facebook promote</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="circle-box">
                        <div class="chart" data-percent="85"><span>85%</span></div>
                    </div>
                    <div class="progress-info text-center mt-3">
                        <strong class="color-secondary">Our Services</strong>
                        <h5 class="text-white">Youtube promote</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="circle-box">
                        <div class="chart" data-percent="85"><span>85%</span></div>
                    </div>
                    <div class="progress-info text-center mt-3">
                        <strong class="color-secondary">Our Services</strong>
                        <h5 class="text-white">Instagram promote</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="circle-box">
                        <div class="chart" data-percent="80"><span>80%</span></div>
                    </div>
                    <div class="progress-info text-center mt-3">
                        <strong class="color-secondary">Our Services</strong>
                        <h5 class="text-white">Tiktok promote</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--call to action progressbar end-->


   <section class="call-to-action py-5 gray-light-bg">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                <div class="col-md-7">
                    <div class="subscribe-content">
                        <h3 class="mb-1">Contact with V.S.L CONCEPTS ENGAGMENT HUB</h3>
                        <p>V.S.L ENGAGMENT HUB is a network that will help you Increase Your Social Media Growth Instantly.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="action-btn text-lg-right text-sm-left">
                        <a href="{{ route('contact') }}" class="btn secondary-solid-btn">Contact With Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection