@extends('layouts.app')
@section('title', 'Facebook Followers Order')

@section('content')
    <!--header section start-->
    <section class="hero-section ptb-100 gradient-overlay"
             style="background: url('img/header-bg-5.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">Facebook Followers Order</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                <li class="list-inline-item breadcrumb-item active">Facebook Followers Order</li>
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
                        <h2 class="text-left">Buy Facebook Followers</h2>
                        <form action="" method="">
                            <div class="form-group">
                                <label class="d-block mb-2 text-dark text-left">Facebook User ID *</label>
                                <input class="form-control w-50" type="text" name="fb_user_id" placeholder="Enter your facebook user ID">
                            </div>
                            <div class="form-group">
                                <label class="d-block mb-2 text-dark text-left">Facebook User Name *</label>
                                <input class="form-control w-50" type="text" name="fb_user_name" placeholder="Enter your facebook user Name">
                            </div>
                            <div class="form-group">
                                <label class="d-block mb-2 text-dark text-left">Facebook Link *</label>
                                <input class="form-control w-50" type="text" name="fb_user_name" placeholder="https://www.facebook.com/vslengagementhub-104330467731189/">
                            </div>
                            <div class="form-group">
                                <label class="d-block mb-2 text-dark text-left">Facebook Followers *</label>
                                <select class="form-control w-50" id="links" name="likes">
                                    <option value="">Please Select</option>
                                    <option value="1000">1000 Followers</option>
                                    <option value="2000">2000 Followers</option>
                                    <option value="5000">5000 Followers</option>
                                    <option value="10000">10000 Followers</option>
                                    <option value="20000">20000 Followers</option>
                                    <option value="25000">25000 Followers</option>
                                    <option value="30000">30000 Followers</option>
                                    <option value="0">Other</option>
                                </select>
                                
                            </div>
                            <div class="pay">

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

    
    <script type="text/javascript">
        jQuery(document).ready(function ()
        {
            jQuery('select[name="likes"]').on('change',function(){
               var ID = jQuery(this).val();
               if(ID == '1000'){
                var price = "₦6500";
               }
               else if (ID == '2000'){
                var price = "₦10000";
               }
               else if (ID == '5000'){
                var price = "₦12000";
               }
               else if (ID == '10000'){
                var price = "₦15000";
               }
               else if (ID == '20000'){
                var price = "₦16000";
               }
               else if (ID == '25000'){
                var price = "₦20000";
               }
               else if (ID == '30000'){
                var price = "₦24000";
               }

               if(ID == '0')
               {
                   $('.pay').html('<div class="form-group"><label class="d-block mb-2 text-dark text-left">Any Other Likes *</label><input class="form-control w-50" type="number" name="likes" id="search" placeholder="Input likes" required></div>');
                   $('#show_only').val(this.price);      
               }
                else
               {
                  $('#show_only').val(price);
                  $('.pay').empty();
               }
            });
        });
    </script>
     <script>
        jQuery(document).ready(function ()
        {
            jQuery(document).on('keyup', '#search', function(){
               var ID = (jQuery(this).val() * 2);
               var data = "₦" + ID;
               
                $('#show_only').val(data);      
            });
        });

        
    </script>

@endsection