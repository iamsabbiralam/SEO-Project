@extends('layouts.app')
@section('title', 'Facebook Post Share Order')

@section('content')

    <!--header section start-->
    <section class="hero-section ptb-100 gradient-overlay"
             style="background: url('img/header-bg-5.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">Facebook Post Share Order</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                <li class="list-inline-item breadcrumb-item active">Facebook Post Share Order</li>
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
                        <h2 class="text-left">Buy Facebook Post Share</h2>
                        <form action="{{ route('order') }}" method="post">
                            @csrf
                            <input type="hidden" name="name" value="facebook_post_share" required>
                            <div class="form-group">
                                <label class="d-block mb-2 text-dark text-left">Facebook User Name *</label>
                                <input class="form-control w-50" type="text" name="user_name" placeholder="Enter your facebook user Name" required>
                            </div>
                            <div class="form-group">
                                <label class="d-block mb-2 text-dark text-left">Facebook Link *</label>
                                <input class="form-control w-50" type="text" name="link" placeholder="https://www.facebook.com/vslengagementhub-104330467731189/" required>
                            </div>
                            <div class="form-group">
                                <label class="d-block mb-2 text-dark text-left" required>Facebook Post Share *</label>
                                <select class="form-control w-50" id="quantity" name="quantity">
                                    <option value="">Please Select</option>
                                    <option value="100">100 Post Share</option>
                                    <option value="200">200 Post Share</option>
                                    <option value="300">300 Post Share</option>
                                    <option value="500">500 Post Share</option>
                                    <option value="750">750 Post Share</option>
                                    <option value="1000">1000 Post Share</option>
                                    <option value="5000">5000 Post Share</option>
                                    <option value="10000">10000 Post Share</option>
                                    <option value="50000">50000 Post Share</option>
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
               if(ID == '100'){
                var price = "₦1500";
               }
               else if (ID == '200'){
                var price = "₦3000";
               }
               else if (ID == '300'){
                var price = "₦5000";
               }
               else if (ID == '500'){
                var price = "₦8000";
               }
               else if (ID == '750'){
                var price = "₦12000";
               }
               else if (ID == '1000'){
                var price = "₦16000";
               }
               else if (ID == '5000'){
                var price = "₦80000";
               }
               else if (ID == '1000'){
                var price = "₦160000";
               }
               else if (ID == '50000'){
                var price = "₦800000";
               }

               if(ID == 'other')
               {
                   $('.pay').html('<div class="form-group"><label class="d-block mb-2 text-dark text-left">Any Other Quantity *</label><input class="form-control w-50" type="number" name="quantity" id="search" placeholder="Input Post Share Quantity" required></div>');
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
               var ID = (jQuery(this).val() * 15);
               var data = "₦" + ID;
               
                $('#show_only').val(data);      
            });
        });
    </script>

@endsection