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
    <title>@yield('title')</title>

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

        .order-price input{
            font-size: 22px;
            height: 50px;
        }
        .content{
            margin-left: 10px;
            color: black;
            
        }
        .content td, .content th{
            border: 1px solid #ccc; 
            min-width: 120px;
        }
        .nav{
            border: 1px solid #ccc;
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
                <img src="{{ asset('img/header-logo.png') }}" alt="logo" class="img-fluid"/>
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
                            <li><a href="buy-facebook-likes.php">Buy Facebook Likes</a></li>
                            <li><a href="buy-facebook-followers.php">Buy Facebook Followers</a></li>
                            <li><a href="buy-facebook-post-likes.php">Buy Facebook Post Likes</a></li>
                            <li><a href="buy-facebook-video-views.php">Buy Facebook Video Views</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#" class="dropdown-toggle">Youtube</a>
                        <ul class="sub-menu">
                            <li><a href="buy-youtube-views.php">Buy YouTube Views</a></li>
                            <li><a href="buy-youtube-subscribe.php">Buy YouTube Subscribe</a></li>
                            <li><a href="buy-youtube-likes.php">Buy YouTube Video Likes</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">Instagram</a>
                        <ul class="sub-menu">
                            <li><a href="buy-instagram-followers.php">Buy Instagram Followers</a></li>
                            <li><a href="buy-instagram-likes.php">Buy Instagram Photo Likes</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">Tiktok</a>
                        <ul class="sub-menu">
                            <li><a href="buy-tiktok-followers.php">Buy TikTok Followers</a></li>
                            <li><a href="buy-tiktok-likes.php">Buy TikTok Video Likes</a></li>
                            <li><a href="buy-tiktok-views.php">Buy TikTok Video Views</a></li>
                        </ul>
                    </li>
                     @if(Auth::check("email"))
                     <li><a href="{{ route('home') }}">Dashboard</a></li>
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

   @yield('content')

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
                                <img src="{{ asset('img/header-logo.png') }}" alt="logo" class="mb-2 footer-logo">
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
                                        <a class="nav-link" href="about-us.php">About Us</a>
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
                                        <a class="nav-link" href="contact-us.php">Contact Us</a>
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