<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta description -->
    <meta name="description"
          content="">
    <meta name="author" content="">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content=""/> <!-- website name -->
    <meta property="og:site" content=""/> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content=""/> <!-- description shown in the actual shared post -->
    <meta property="og:image" content=""/> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content=""/> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article"/>

    <!--title-->
    <title>V.S.L Concepts Engagment Hub</title>

    <!-- Head Global Code Include Start---------------->
        <!--favicon icon-->
    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/png" sizes="16x16">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans:400,600&amp;display=swap"
          rel="stylesheet">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <!--Themify icon css-->
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <!--Fontawesome icon css-->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <!--animated css-->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <!--ytplayer css-->
    <link rel="stylesheet" href="{{ asset('css/jquery.mb.YTPlayer.min.css') }}">
    <!--Owl carousel css-->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <!--custom css-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!--responsive css-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">    <!-- Head Global Code Include End---------------->
    <style>
        .pricing-section{
            background: #EAECEE;
        }
        .slider-img .image-wrap img{
            
            width: 665px;
        }
        .promo-section .text-center{
            text-align: center;
        }
        .promo-section p{
            color: #707070;
        }
        .login-content{
            margin-top: 30px;
        }
        .work-process-section .process-content{
            height: 115px;
        }
        .hero-slider-content h1{
            font-size: 35px;
        }
        .hero-slider-content .outline-btn, .secondary-solid-btn, .primary-solid-btn, .solid-white-btn, .outline-white-btn, .secondary-outline-btn {
            padding: 12px 12px;
            font-size: 12px;
            margin-right: 5px;
        }
        .service-icon img{
            width: 50px;
        }
        .free-trial-image{
            background-image: url(img/section-img-1.jpg);
        }
        .free-trial-image:before{
            background: none !important;
        }
        .mobile-on{
            display: none;
        }
        .free-trial-image{
            background-size: contain;
        }
        @media only screen and (max-width: 992px) {
            .slider-img .image-wrap img{
                width: auto;
                margin: 0 auto;
                display: none;
            }
            .mobile-on{
            display: block;
        }
        }
        
    </style>

</head>
<body>

<!--loader start-->
<div id="preloader">
    <div class="loader1">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!--loader end-->

<!--header section start-->
<header class="header">
    <!--topbar start-->
    <div id="header-top-bar" class="primary-bg py-2">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-7 col-lg-7 d-none d-md-block d-lg-block">
                    <div class="topbar-text text-white">
                        <ul class="list-inline">
                            <li class="list-inline-item"><span class="fas fa-headphones-alt mr-1"></span> 24x7 Technical Support</li>
                            <li class="list-inline-item"><span class="fas fa-phone-alt mr-1"></span> +234 816 923 4576</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="topbar-text text-white">
                        <ul class="list-inline text-md-right text-lg-right text-left  mb-0">
                            <li class="list-inline-item">
                                <a href="#" class="rounded"><span class="fab fa-facebook-f"></span></a>
                            </li>
                            <li class="list-inline-item"><a href="#" class="rounded"><span
                                    class="fab fa-twitter"></span></a>
                            </li>
                            <li class="list-inline-item"><a href="#" class="rounded"><span
                                    class="fab fa-linkedin-in"></span></a>
                            </li>
                            <li class="list-inline-item"><a href="#" class="rounded"><span
                                    class="fab fa-dribbble"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--topbar end-->
    <!--start navbar-->
    <nav class="navbar navbar-expand-lg fixed-top white-bg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('welcome') }}">
                <img src="img/header-logo.png" alt="logo" class="img-fluid"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>
            <div class="collapse navbar-collapse h-auto" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto menu">
                    <li><a href="{{ route('welcome') }}"> Home</a>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">
                            Facebook
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('buy_facebook_likes') }}">Buy Facebook Likes</a></li>
                            <li><a href="{{ route('buy_facebook_followers') }}">Buy Facebook Followers</a></li>
                            <li><a href="{{ route('buy_facebook_share') }}">Buy Facebook Post Share</a></li>
                            <li><a href="{{ route('buy_facebook_post_likes') }}">Buy Facebook Post Likes</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#" class="dropdown-toggle">Youtube</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('buy_youtube_views') }}">Buy YouTube Views</a></li>
                            <li><a href="{{ route('buy_youtube_subscribe') }}">Buy YouTube Subscribe</a></li>
                            <li><a href="{{ route('buy_youtube_likes') }}">Buy YouTube Video Likes</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">Instagram</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('buy_instagram_followers') }}">Buy Instagram Followers</a></li>
                            <li><a href="{{ route('buy_instagram_likes') }}">Buy Instagram Photo Likes</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">Tiktok</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('buy_tiktok_followers') }}">Buy TikTok Followers</a></li>
                            <li><a href="{{ route('buy_tiktok_likes') }}">Buy TikTok Video Likes</a></li>
                            <li><a href="{{ route('buy_tiktok_views') }}">Buy TikTok Video Views</a></li>
                        </ul>
                    </li>
                    @if(Auth::check("email"))
                    <li>
                        <a href="#" class="dropdown-toggle">{{ Auth::user()->name }}</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('home') }}">Dashboard</a></li>
                            <li><a href="{{ route('profile') }}">Profile</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                    @else
                    <li><a href="{{ route('register') }}" class="btn secondary-solid-btn check-btn">Register</a></li>
                    <li><a href="{{ route('login') }}" class="btn secondary-solid-btn check-btn">Login</a></li>
                    @endif
                   
                    
                </ul>
            </div>
        </div>
    </nav>
</header>
<!--header section end-->

<!--body content wrap start-->
<div class="main">

    <!--hero section start-->
    <section class="ptb-70 gradient-bg slider-img">
        <div class="container">
            <div class="row align-items-center login-content">
                <div class="col-md-12 col-lg-5">
                    <div class="hero-slider-content text-white pt-5">
                        <strong>Instant Growth </strong>
                        <h1 class="text-white">Grow your social media accounts Now!</h1>
                        <p class="lead">V.S.L CONCEPTS ENGAGMENT HUB will organically help you increase your Facebook, YouTube, Instagram, and TikTok Likes, Shares, Subscribers, Views, and Followers with real active people,  NO BOTS.</p>

                        <div class="action-btns mt-3">
                            <a href="{{ route('register') }}" class="btn secondary-solid-btn">Start Free Trial (30 Instagram Post likes) </a>
                            <a href="{{ route('services') }}" class="btn secondary-solid-btn">See Pricing Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-7">
                    <div class="image-wrap pt-5">
                        <img src="{{ asset('img/slider-image.png') }}" class="img-fluid custom-width" alt="hero"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->
    
    <!--about us section start-->
    <section class="about-us-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row">
                 <div class="col-md-6 col-lg-6">
                    <div class="about-us-img">
                        <img src="{{ asset('img/5d991805179e8.png') }}" alt="about us" class="img-fluid about-single-img">
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
                            <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span>We have <strong>fast</strong> Support
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
                                    <h2 class="mb-0 color-secondary">1479765 </h2>
                                    <strong>Boosted Accounts</strong>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="counter-single">
                                    <h2 class="mb-0 color-secondary">974967</h2>
                                    <strong>Satisfied Customers</strong>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="counter-single">
                                    <h2 class="mb-0 color-secondary">55 M.</h2>
                                    <strong>Naira Payouts</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!--about us section end-->

 <!--services section start-->
    <section class="services-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-5">
                        <strong class="color-secondary">Our Services</strong>
                        <h2>WHAT SERVICES DO WE OFFER?</h2>
                        <span class="animate-border mr-auto ml-auto mb-4"></span>
                        <p class="lead">We provide a wide range of SOCIAL MEDIA engagement services. Listed below are social networks with their numerous features.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                        <span class="service-icon d-block mb-4">
                            <img src="img/fb-logo.png">
                        </span>
                        <h5>FACEBOOK LIKES, FOLLOWERS, SHARE</h5>
                        <p class="mb-0">We can help you gain thousands of likes, followers and shares on facebook. You can also earn by performing Facebook tasks and get your earnings transferred to your local bank account.
                         Here is the full list of our Facebook features.<br>
                        1. Facebook Likes<br>
                        2. Facebook Share<br>
                        3. Facebook Followers<br>
                        4. Facebook Post Likes<br>
                        5. Facebook Post Share.
                        </p>
                        <a href="#" target="_blank" class="mt-4 btn primary-solid-btn">See Pricing <span
                                class="ti-arrow-right"></span></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                        <span class="service-icon d-block mb-4">
                            <img src="img/youtube-logo.png">
                        </span>
                        <h5>YOUTUBE VIEWS, SUBSCRIBERS AND LIKES</h5>
                        <p class="mb-0">If you have a video on the world's biggest video platform: YouTube, you have also a great chance to promote your video receiving views, likes and subscribers. We also give you the opportunity to earn by performing these tasks and get your earnings transferred to your local bank account.
                         . Have a look at the complete list of YouTube features:<br>
                        1. YouTube Views<br>
                        2. YouTube Subscribe<br>
                        3. YouTube Video Likes

                        </p>
                        <a href="{{ route('services') }}" target="_blank" class="mt-4 btn primary-solid-btn">See Pricing <span
                                class="ti-arrow-right"></span></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                        <span class="service-icon d-block mb-4">
                            <img src="img/instagram-logo.png">
                        </span>
                        <h5>INSTAGRAM FOLLOWERS AND INSTAGRAM PHOTO LIKES</h5>
                        <p class="mb-0">We will help you to get more instagram followers and also likes for your instagram photos. We also give you the opportunity to earn by performing these tasks and get your earnings transferred to your local bank account. Have a look at the complete list of Instagram features:<br>
                        1. Instagram Followers<br>
                        2. Instagram Photo Likes<br><br>
                        </p>
                        <a href="{{ route('services') }}" target="_blank" class="mt-4 btn primary-solid-btn">See Pricing <span
                                class="ti-arrow-right"></span></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                        <span class="service-icon d-block mb-4">
                            <img src="img/tiktok-logo.png">
                        </span>
                        <h5>TIKTOK FOLLOWERS, TIKTOK VIDEO LIKES, TIKTOK VIDEO VIEWS.</h5>
                        <p class="mb-0">
                         We will help you to get more Tiktok followers and also likes for your Tiktok photos. We also give you the opportunity to earn by performing these tasks and get your earnings transferred to your local bank account. Have a look at the complete list of Tiktok features:
                        Here is the list containing all the features:<br>
                        1. TikTok Followers<br>
                        2. TikTok Video Likes<br>
                        3. TikTok Video Views
                        </p>
                        <a href="{{ route('services') }}" target="_blank" class="mt-4 btn primary-solid-btn">See Pricing <span
                                class="ti-arrow-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services section end-->
    
    <img src="img/section-img-1.jpg" alt="image" class="img-fluid mobile-on">
      <!--call to action section start-->
    <section class="call-to-action-video">
        <div class="row m-0">
            <div class="col-lg-7 col-md-12 p-0">
                <div class="free-trial-image text-center">
                    <img src="img/section-img-1.jpg" alt="image" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-5 col-md-12 p-0">
                <div class="free-trial-content text-white">
                    <h2 class="text-white">Earn Over ₦300,000 Monthly Completing  Simple Tasks </h2>
                    <p>With V.S.L CONCEPTS ENGAGMENT HUB, you can now earn Over ₦300,000 Monthly doing the usual things you do on social media. We pay you to like, follow, comment and subscribe to user profiles on this platform.</p>
                    <a href="{{ route('register') }}" class="btn primary-solid-btn mt-3">Start Earning Now</a>
                </div>
            </div>
        </div>
    </section>
    <!--call to action section end-->

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

    <!--why choose us section start-->
    <section class="why-choose-us ptb-100">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-5">
                    <div class="why-choose-us-wrap">
                        <strong class="color-secondary">Why Choose Us</strong>
                        <h3>We help you grow socially and finicially</h3>
                        <span class="animate-border mb-4"></span>
                        <p>V.S.L ENGAGEMENT HUB helps you to increase Facebook, YouTube, Twitter, Instagram, TikTok Like, Share Subscribers, Views , and Followers. We also pay you as you perform simple tasks on our website.</p>

                        <div class="skill-content-wrap">
                            <div class="progress-item">
                                <div class="progress-title">
                                    <h6>Real Followers<span class="float-right"><span
                                            class="progress-number">100</span>%</span>
                                    </h6>
                                </div>
                                <div class="progress">
                                    <span style="width:100%;"><span class="progress-line"></span></span>
                                </div>
                            </div>
                            <div class="progress-item">
                                <div class="progress-title">
                                    <h6>Fast Payout of your earnings<span class="float-right"><span class="progress-number">99</span>%</span>
                                    </h6>
                                </div>
                                <div class="progress">
                                    <span style="width:99%;"><span class="progress-line"></span></span>
                                </div>
                            </div>
                            <div class="progress-item">
                                <div class="progress-title">
                                    <h6>24x7 Technical Support<span class="float-right"><span class="progress-number">98</span>%</span>
                                    </h6>
                                </div>
                                <div class="progress">
                                    <span style="width:98%;"><span class="progress-line"></span></span>
                                </div>
                            </div>
                            <div class="progress-item">
                                <div class="progress-title">
                                    <h6>Customer Satisfaction<span class="float-right"><span
                                            class="progress-number">100</span>%</span>
                                    </h6>
                                </div>
                                <div class="progress">
                                    <span style="width:100%;"><span class="progress-line"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="image-wrap">
                        <img src="img/skill-section-img.png" alt="why choose us" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--why choose us section end-->

    <!--promo section start-->
    <section class="promo-section ptb-100">
        <div class="container">
            <div class="row">
                <div class="section-heading text-center mb-5 col-lg-12">
                    <h2>Make money online easily and legit</h2>
                    <span class="animate-border mr-auto ml-auto mb-4"></span>
                </div>
                <div class="col-md-4 col-lg-6">
                    <a href="#">
                        <div class="single-promo-2 single-promo-hover rounded text-center white-bg p-5 h-100">
                            <div class="circle-icon">
                                <span class="ti-dashboard text-white"></span>
                            </div>
                            <h5>Login to your dashboard</h5>
                            <p>If you are already a user sign in now to perform tasks and earn</p>
                            <div class="action-btns mt-3">
                                <a href="{{ route('login') }}" class="btn secondary-solid-btn">Login Now</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-6">
                    <a href="#">
                        <div class="single-promo-2 single-promo-hover rounded text-center white-bg p-5 h-100">
                            <div class="circle-icon">
                                <span class="ti-dashboard text-white"></span>
                            </div>
                            <h5>Get your free signup bonus now!!!</h5>
                            <p>Sign up now to start earning by performing simple tasks  on social media.</p>
                            <div class="action-btns mt-3">
                                <a href="{{ route('register') }}" class="btn secondary-solid-btn">Register Now</a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--promo section end-->




 

    <!--our work or portfolio section start-->
    
    <!--
    
    <section class="our-portfolio-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-heading text-center mb-4">
                        <strong class="color-secondary">Previous Project</strong>
                        <h2>Our Case Studies</h2>
                        <span class="animate-border mr-auto ml-auto mb-4"></span>
                        <p class="lead">Dynamically pursue reliable convergence rather than 24/7 process improvements.
                            Intrinsicly
                            develop end-to-end customer service without extensive data.</p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center pb-2">
                        <button type="button" class="filter-btn" data-mixitup-control data-filter="all">Digital
                            Marketing
                        </button>
                        <button type="button" class="filter-btn" data-mixitup-control data-filter=".branding">Marketing
                            Strategy
                        </button>
                        <button type="button" class="filter-btn" data-mixitup-control data-filter=".animation">Content
                            Marketing
                        </button>
                        <button type="button" class="filter-btn" data-mixitup-control data-filter=".other">SEO
                            Services
                        </button>
                    </div>
                    <div class="portfolio-container" id="MixItUp">
                        <div class="mix portfolio-item branding" data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="project-details.html" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="img/portfolios/3.jpg" alt="portfolio"/>
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Creative Design</h5>
                                        <p>Design</p>
                                    </div>
                                </a>
                                <div class="text-center p-4">
                                    <h5 class="mb-1">Market Research Analysis</h5>
                                    <span>Sales, SEO, Marketing</span>
                                </div>
                            </div>
                        </div>
                        <div class="mix portfolio-item other animation" data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="project-details.html" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="img/portfolios/2.jpg" alt="portfolio"/>
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Web UI/UX Design</h5>
                                        <p>Web, Design</p>
                                    </div>
                                </a>
                                <div class="text-center p-4">
                                    <h5 class="mb-1">Market Research Analysis</h5>
                                    <span>Sales, SEO, Marketing</span>
                                </div>
                            </div>
                        </div>
                        <div class="mix portfolio-item animation" data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="project-details.html" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="img/portfolios/4.jpg" alt="portfolio"/>
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Corporate Flyer Design</h5>
                                        <p>Flyer Design</p>
                                    </div>
                                </a>
                                <div class="text-center p-4">
                                    <h5 class="mb-1">Market Research Analysis</h5>
                                    <span>Sales, SEO, Marketing</span>
                                </div>
                            </div>
                        </div>
                        <div class="mix portfolio-item branding" data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="project-details.html" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="img/portfolios/1.jpg" alt="portfolio"/>
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Web UI/UX Design</h5>
                                        <p>Web, Design</p>
                                    </div>
                                </a>
                                <div class="text-center p-4">
                                    <h5 class="mb-1">Market Research Analysis</h5>
                                    <span>Sales, SEO, Marketing</span>
                                </div>
                            </div>
                        </div>
                        <div class="mix portfolio-item animation other" data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="project-details.html" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="img/portfolios/5.jpg" alt="portfolio"/>
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Wall Painting Design</h5>
                                        <p>Painting Design</p>
                                    </div>
                                </a>
                                <div class="text-center p-4">
                                    <h5 class="mb-1">Market Research Analysis</h5>
                                    <span>Sales, SEO, Marketing</span>
                                </div>
                            </div>
                        </div>
                        <div class="mix portfolio-item branding " data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="project-details.html" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="img/portfolios/6.jpg" alt="portfolio"/>
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Corporate Identity Design</h5>
                                        <p>Corporate Design</p>
                                    </div>
                                </a>
                                <div class="text-center p-4">
                                    <h5 class="mb-1">Market Research Analysis</h5>
                                    <span>Sales, SEO, Marketing</span>
                                </div>
                            </div>
                        </div>
                        <div class="gap"></div>
                        <div class="gap"></div>
                        <div class="gap"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    ------------------------>
    
    <!--our work or portfolio section end-->

    <!--pricing with switch section start-->
    <section class="pricing-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <strong class="color-secondary">Our Pricing</strong>
                        <h2>Flexible Price Plan</h2>
                        <span class="animate-border mr-auto ml-auto mb-4"></span>
                        <p class="lead">
                            Professional FACEBOOK LIKES, YOUTUBE VIEWS, INSTAGRAM FOLLOWERS at an affordable price
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card text-center single-pricing-pack">
                        <div class="price-img pt-5">
                            <img src="img/priching-img-1.png" alt="price" width="120" class="img-fluid">
                        </div>
                        <div class="card-header py-4 border-0 pricing-header">
                            <div class="price text-center mb-0 monthly-price">₦2000</div>
                        </div>
                        <div class="price-name">
                            <h5 class="mb-0">FACEBOOK LIKES</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li><span>BUY 300 FACEBOOK Friends</span></li>
                                <li><span>Best prices.</span> In time delivery</li>
                                <li>100% real human friends</li>
                                <li>No click farms. No BOTs</li>
                                <li>Active friends.<span> 100% SAFE</span></li>
                                <li>Best quality guaranteed</li>
                            </ul>
                            <a href="{{ route('facebook_likes_order') }}" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card popular-price text-center single-pricing-pack">
                        <div class="price-img pt-5">
                            <img src="img/priching-img-2.png" alt="price" width="120" class="img-fluid">
                        </div>
                        <div class="card-header py-4 border-0 pricing-header">
                            <div class="price text-center mb-0 monthly-price">₦4000</div>
                        </div>
                        <div class="price-name">
                            <h5 class="mb-0">YOUTUBE VIEWS</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li><span>BUY 250 YOUTUBE Views</span></li>
                                <li>100% real human viewers</li>
                                <li><span>Best prices.</span> In time delivery</li>
                                <li>No click farms. No BOTs</li>
                                <li>Active friends.<span> 100% SAFE</span></li>
                                <li>Minimum view duration = 1 minute</li>
                            </ul>
                            <a href="{{ route('youtube_views_order') }}" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card text-center single-pricing-pack">
                        <div class="price-img pt-5">
                            <img src="img/priching-img-3.png" alt="price" width="120" class="img-fluid">
                        </div>
                        <div class="card-header py-4 border-0 pricing-header">
                            <div class="price text-center mb-0 monthly-price">₦6000</div>
                        </div>
                        <div class="price-name">
                            <h5 class="mb-0">INSTAGRAM FOLLOWERS</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li><span>BUY 500 IG Followers</span></li>
                                <li><span>Best prices.</span> In time delivery</li>
                                <li>100% real human</li>
                                <li>No click farms. No BOTs</li>
                                <li>Active users.<span> 100% SAFE</span></li>
                                <li>Best quality guaranteed</li>
                            </ul>
                            <a href="{{ route('instagram_followers_order') }}" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <div class="action-btns mt-5">
                        <a href="{{ route('login') }}" class="btn secondary-solid-btn px-5">More All Plan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--pricing with switch section end-->

    <!--testimonial section start-->
    <section class="testimonial-section ptb-100"
             style="background: url('img/testimonial-bg.png')no-repeat center center / cover">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-5">
                    <div class="testimonial-heading text-white">
                        <h2 class="text-white">What Our Client Say About Us</h2>
                        <span class="animate-border mb-4"></span>
                        <p>Our services are 100% BOTS free. In other words we provide 100% results from real people.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="testimonial-content-wrap">
                        <img src="img/testimonial-arrow-top.png" class="img-fluid testimonial-tb-shape shape-top"
                             alt="testimonial shape">
                        <div class="owl-carousel owl-theme client-testimonial-1 custom-dot testimonial-shape">
                            <div class="item">
                                <div class="testimonial-quote-wrap">
                                    <div class="media author-info mb-3">
                                        <div class="author-img mr-3">
                                            <img src="img/client-1.jpg" alt="client" class="img-fluid">
                                        </div>
                                        <div class="media-body text-white">
                                            <h5 class="mb-0 text-white">john 
Lagos</h5>
                                            <span>CEO</span>
                                        </div>
                                        <span class="fas fa-quote-right icon-md text-white"></span>
                                    </div>
                                    <div class="client-say text-white">
                                        <p>OMG what can I say! I have searched online for websites that can pay me for performing tasks. this website has proved to be the best. am cashing out big time. highly recommended</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-quote-wrap">
                                    <div class="media author-info mb-3">
                                        <div class="author-img mr-3">
                                            <img src="img/client-2.jpg" alt="client" class="img-fluid">
                                        </div>
                                        <div class="media-body text-white">
                                            <h5 class="mb-0 text-white">Amarachi Owerri</h5>
                                            <span>CEO</span>
                                        </div>
                                        <span class="fas fa-quote-right icon-md text-white"></span>
                                    </div>
                                    <div class="client-say text-white">
                                        <p>This site is simply amazing, I don't know how to thank them- my new album was released last month and it was having trouble popping off.. taking a leap of faith I bought followers for my ig and some youtube views for the song. Next thing I know i'm all over playlists!!!!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-quote-wrap">
                                    <div class="media author-info mb-3">
                                        <div class="author-img mr-3">
                                            <img src="img/client-3.jpg" alt="client" class="img-fluid">
                                        </div>
                                        <div class="media-body text-white">
                                            <h5 class="mb-0 text-white">Osahon Benin</h5>
                                            <span>CEO</span>
                                        </div>
                                        <span class="fas fa-quote-right icon-md text-white"></span>
                                    </div>
                                    <div class="client-say text-white">
                                        <p>Aye this site is the bomb I give them mad props for helping my team grow in such a short period of time.  They set me up with likes and followers and the growth has been on point from day 1.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-quote-wrap">
                                    <div class="media author-info mb-3">
                                        <div class="author-img mr-3">
                                            <img src="img/client-4.jpg" alt="client" class="img-fluid">
                                        </div>
                                        <div class="media-body text-white">
                                            <h5 class="mb-0 text-white">Peter 
Ibadan</h5>
                                            <span>CEO</span>
                                        </div>
                                        <span class="fas fa-quote-right icon-md text-white"></span>
                                    </div>
                                    <div class="client-say text-white">
                                        <p>No complaints with the quality: coming from someone who has tested 20+ websites and found almost all to be really low quality for the price. V.S.L seems to offer the highest-end services for the pricing, I find it to be a nice balance of value and quality that keeps me coming back for more. Support team is also very helpful.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="img/testimonial-arrow-bottom.png" class="img-fluid testimonial-tb-shape shape-bottom"
                             alt="testimonial shape">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--testimonial section end-->



    <!--team two section start-->
    
<!--    
    <section class="team-two-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <strong class="color-secondary">Our Team</strong>
                        <h2>Awesome Team Members</h2>
                        <span class="animate-border mr-auto ml-auto mb-4"></span>
                        <p class="lead">Distinctively grow go forward manufactured products and optimal networks.
                            Enthusiastically
                            disseminate user-centric outsourcing.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="staff-member my-md-3 my-lg-3 my-sm-0">
                        <div class="card text-center">
                            <img src="img/team-member-1.png" alt="team image" width="120" class="img-fluid m-auto pt-4">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Richard Ford</h5>
                                <span>Instructor of Mathematics</span>
                                <p class="teacher-quote pt-3">Dramatically leverage existing fully researched
                                    platforms. </p>
                                <ul class="list-inline pt-2 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"Dramatically leverage existing fully researched platforms
                                    vis-a-vis viral." </p><a
                                    href="#" class="teacher-name">
                                <h5 class="mb-0 teacher text-white">Richard Ford</h5></a>
                                <span class="teacher-field text-white">Instructor of Mathematics</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                                <p class="teacher-see-profile">
                                    <a href="#" class="btn outline-white-btn">View my profile</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="staff-member my-md-3 my-lg-3 my-sm-0">
                        <div class="card text-center">
                            <img src="img/team-member-2.png" alt="team image" width="120" class="img-fluid m-auto pt-4">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Kely Roy</h5>
                                <span>Lead Designer</span>
                                <p class="teacher-quote pt-3">Compellingly strategize covalent e-services rather
                                    than </p>
                                <ul class="list-inline pt-2 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"Credibly extend high-payoff web-readiness via top-line
                                    relationships." </p><a
                                    href="#" class="teacher-name">
                                <h5 class="mb-0 teacher text-white">Kely Roy</h5></a><span
                                    class="teacher-field text-white">Lead Designer</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                                <p class="teacher-see-profile">
                                    <a href="#" class="btn outline-white-btn">View my profile</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="staff-member my-md-3 my-lg-3 my-sm-0">
                        <div class="card text-center">
                            <img src="img/team-member-3.png" alt="team image" width="120" class="img-fluid m-auto pt-4">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Gerald Nichols</h5>
                                <span>Managing Director</span>
                                <p class="teacher-quote pt-3">Credibly extend high-payoff web-readiness via
                                    top-line.</p>
                                <ul class="list-inline pt-2 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"Authoritatively evolve stand-alone e-tailers whereas
                                    prospective partnerships." </p><a
                                    href="#" class="teacher-name">
                                <h5 class="mb-0 teacher text-white">Gerald Nichols</h5></a>
                                <span class="teacher-field text-white">Managing Director</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                                <p class="teacher-see-profile">
                                    <a href="#" class="btn outline-white-btn">View my profile</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="staff-member my-md-3 my-lg-3 my-sm-0">
                        <div class="card text-center">
                            <img src="img/team-member-4.png" alt="team image" width="120" class="img-fluid m-auto pt-4">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Gerald Nichols</h5>
                                <span>Managing Director</span>
                                <p class="teacher-quote pt-3">Professionally engage clicks-and-mortar customer</p>
                                <ul class="list-inline pt-2 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"Authoritatively evolve stand-alone e-tailers whereas
                                    prospective partnerships." </p><a
                                    href="#" class="teacher-name">
                                <h5 class="mb-0 teacher text-white">Gerald Nichols</h5></a>
                                <span class="teacher-field text-white">Managing Director</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                                <p class="teacher-see-profile">
                                    <a href="#" class="btn outline-white-btn">View my profile</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
-->    
    <!--team two section end-->

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
                        <a href="{{ route('contact') }}" class="btn secondary-solid-btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--call to action section end-->
    
    <!--call to action section start-->
    <section class="call-to-action ptb-70" style="background: url('img/cta-bg.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9">
                    <div class="section-heading text-center text-white mb-5">
                        <h2 class="text-white">Subscribe to get the latest updates.</h2>
                        <p class="lead">Give us your email so that we can be able to update you on the latest new services and any other promotions going on.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="analysis-form-wrap text-center">
                        <div class="col-lg-4 col-md-12 p-0">
                            <div class="form-group analysis-form-group">
                                <span class="analysis-form-input">
                                    <input type="url" name="url" size="40" class="form-control" placeholder="Type website URL">
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 p-0">
                            <div class="form-group analysis-form-group analysis-form-border">
                                <span class="analysis-form-input">
                                    <input type="email" name="email" size="40" class="form-control" placeholder="Your Email">
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 p-0">
                            <div class="form-group">
                                <input type="submit" value="Subscribe Now">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cta-image d-none d-lg-block d-md-block">
            <img src="img/cta-1-man.svg" width="200" class="img-left" alt="cta">
            <img src="img/cta-1-mike.svg" width="200" class="img-right" alt="cta">
        </div>
    </section>
    <!--call to action section end-->

</div>
<!--body content wrap end-->


<!-- Footer Global Code Include Start---------------->
<!--footer section start-->
<footer class="footer-section">
    <!--footer top start-->
    <div class="footer-top gradient-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-9">
                    <div class="row footer-top-wrap">
                        <div class="col-md-4 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <img src="img/header-logo.png" alt="logo" class="mb-2 footer-logo">
                                <p>V.S.L ENGAGEMENT HUB helps you to increase Facebook, YouTube, Twitter, Instagram, TikTok Like, Share Subscribers, Views , and Followers. We also pay you as you perform simple tasks on our website.</p>
                                <div class="social-nav mt-4">
                                    <ul class="list-unstyled social-list mb-0">
                                        <li class="list-inline-item tooltip-hover">
                                            <a href="#" class="rounded"><span class="ti-facebook"></span></a>
                                            <div class="tooltip-item">Facebook</div>
                                        </li>
                                        <li class="list-inline-item tooltip-hover"><a href="#" class="rounded"><span
                                                class="ti-twitter"></span></a>
                                            <div class="tooltip-item">Twitter</div>
                                        </li>
                                        <li class="list-inline-item tooltip-hover"><a href="#" class="rounded"><span
                                                class="ti-linkedin"></span></a>
                                            <div class="tooltip-item">Linkedin</div>
                                        </li>
                                        <li class="list-inline-item tooltip-hover"><a href="#" class="rounded"><span
                                                class="ti-dribbble"></span></a>
                                            <div class="tooltip-item">Dribbble</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">Services</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Facebook</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">YouTube</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Instagram </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">TikTok</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Engage and Earn</a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">Legal Info</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Report Abuse</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Terms of Service</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="row footer-top-wrap mt-md-4 mt-sm-0 mt-lg-0">
                        <div class="col-12">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">GET IN TOUCH</h4>
                                <ul class="get-in-touch-list">
                                    <li class="d-flex align-items-center py-2"><span
                                            class="fas fa-map-marker-alt mr-2"></span> 56 Country Home Road, G.R.A Benin City, Edo State, Nigeria
                                    </li>
                                    <li class="d-flex align-items-center py-2"><span
                                            class="fas fa-envelope mr-2"></span> info@vslengagementhub.com
                                    </li>
                                    <!--<li class="d-flex align-items-center py-2"><span class="fas fa-phone-alt mr-2"></span> (123) 456-7890 - (123) 456-7890</li>-->
                                </ul>
                                <form class="newsletter-form mt-3">
                                    <input type="text" class="input-newsletter" placeholder="Enter your email"
                                           name="EMAIL" required="" autocomplete="off">
                                    <button type="submit" class="disabled"
                                            style="pointer-events: all; cursor: pointer;"><i
                                            class="fas fa-paper-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer top end-->

    <!--footer copyright start-->
    <div class="footer-bottom gray-light-bg py-2">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-5 col-lg-5">
                    <p class="copyright-text pb-0 mb-0">Copyrights © 2021. All
                        rights reserved by
                        <a href="https://www.ajkerweb.com/" target="_blank">AjkerWeb</a></p>
                </div>
                <div class="col-md-7 col-lg-6 d-none d-md-block d-lg-block">
                    <ul class="list-inline policy-nav text-right social-list">
                        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--footer copyright end-->
</footer>
<!--footer section end-->
<!-- Footer Global Code Include End---------------->

<!--bottom to top button start-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="ti-angle-up"></span>
</button>
<!--bottom to top button end-->


<!--jQuery-->
<script src="{{ asset('js/jquery-3.5.0.min.js') }}"></script>
<!--Popper js-->
<script src="{{ asset('js/popper.min.js') }}"></script>
<!--Bootstrap js-->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!--Magnific popup js-->
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<!--jquery easing js-->
<script src="{{ asset('js/jquery.easing.min.js') }}"></script>
<!--jquery ytplayer js-->
<script src="{{ asset('js/jquery.mb.YTPlayer.min.js') }}"></script>
<!--Isotope filter js-->
<script src="{{ asset('js/mixitup.min.j') }}s"></script>
<!--wow js-->
<script src="{{ asset('js/wow.min.js') }}"></script>
<!--owl carousel js-->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!--countdown js-->
<script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
<!--jquery easypiechart-->
<script src="{{ asset('js/jquery.easy-pie-chart.js') }}"></script>
<!--custom js-->
<script src="{{ asset('js/scripts.js') }}"></script>

<script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?85327';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
  "enabled":true,
  "chatButtonSetting":{
      "backgroundColor":"#4dc247",
      "ctaText":"",
      "borderRadius":"25",
      "marginLeft":"0",
      "marginBottom":"50",
      "marginRight":"50",
      "position":"right"
  },
  "brandSetting":{
      "brandName":"Whatsapp",
      "brandSubTitle":"",
      "brandImg":"https://www.freepnglogos.com/uploads/whatsapp-logo-png-hd-2.png",
      "welcomeText":"Hi there!\nHow can I help you?",
      "messageText":"Hello, I have a question about ",
      "backgroundColor":"#0a5f54",
      "ctaText":"Start Chat",
      "borderRadius":"25",
      "autoShow":false,
      "phoneNumber":"2348169234576"
  }
};
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>
</body>

<!-- Mirrored from digimark.themetags.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jun 2021 06:44:30 GMT -->
</html>