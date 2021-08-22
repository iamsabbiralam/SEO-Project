@extends('layouts.app')
@section('title', 'Tiktok Followers Order')

@section('content')

    <!--header section start-->
    <section class="hero-section ptb-100 gradient-overlay"
             style="background: url('img/header-bg-5.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">Tiktok Followers Order</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                <li class="list-inline-item breadcrumb-item active">Tiktok Followers Order</li>
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
                        <h2 class="text-left">Buy Tiktok Followers</h2>
                        <form action="{{ route('order') }}" method="post">
                            @csrf
                            <input type="hidden" name="name" value="tiktok_followers" required>
                            <div class="form-group">
                                <label class="d-block mb-2 text-dark text-left">Tiktok User Name *</label>
                                <input class="form-control w-50" type="text" name="link" placeholder="Enter your tiktok user Name" required>
                            </div>
                            <div class="form-group">
                                <label class="d-block mb-2 text-dark text-left" required>Tiktok Followers *</label>
                                <select class="form-control w-50" id="quantity" name="quantity">
                                    <option value="">Please Select</option>
                                    <option value="1000">1000 Followers</option>
                                    <option value="2000">2000 Followers</option>
                                    <option value="5000">5000 Followers</option>
                                    <option value="10000">10000 Followers</option>
                                    <option value="20000">20000 Followers</option>
                                    <option value="25000">25000 Followers</option>
                                    <option value="30000">30000 Followers</option>
                                    <option value="other">Other</option>
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

    <!--jQuery-->
    <script src="{{ asset('js/jquery-3.5.0.min.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ()
        {
            jQuery('select[name="quantity"]').on('change',function(){
               var ID = jQuery(this).val();
               if(ID == '1000'){
                var price = "6500";
               }
               else if (ID == '2000'){
                var price = "10000";
               }
               else if (ID == '5000'){
                var price = "12000";
               }
               else if (ID == '10000'){
                var price = "15000";
               }
               else if (ID == '20000'){
                var price = "16000";
               }
               else if (ID == '25000'){
                var price = "20000";
               }
               else if (ID == '30000'){
                var price = "24000";
               }

               if(ID == 'other')
               {
                   $('.pay').html('<div class="form-group"><label class="d-block mb-2 text-dark text-left">Any Other Quantity *</label><input class="form-control w-50" type="number" name="quantity" id="search" placeholder="Input Followers Quantity" required></div>');
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
               var ID = (jQuery(this).val() * 7);
               var data = ID;
               
                $('#show_only').val(data);      
            });
        });

        
    </script>

@endsection