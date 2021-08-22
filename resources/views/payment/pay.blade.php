@extends('layouts.app')
@section('title', 'Payment')

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
                                <li class="list-inline-item breadcrumb-item active">Payment Details</li>
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
                        <h2 class="text-left">Payment Details</h2>
                        @if ($errors->any())
                        &nbsp; <br><br>
                        <center>
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </center>
                        @endif
                        <form id="makePaymentForm">
                            @csrf
                            <div class="form-group">
                                <label class="d-block mb-2 text-dark text-left">Name*</label>
                                <input class="form-control w-50" type="text" name="name" id="name" placeholder="Enter your Name" required>
                            </div>
                            <div class="form-group">
                                <label class="d-block mb-2 text-dark text-left">Email*</label>
                                <input class="form-control w-50" type="email" name="email" id="email"  placeholder="Enter Email" required>
                            </div>
                            <div class="form-group">
                                <label class="d-block mb-2 text-dark text-left">Amount*</label>
                                <input class="form-control w-50" type="number" name="amount" id="amount"  placeholder="Enter Amount" required>
                            </div>
                            <div class="form-group">
                                <label class="d-block mb-2 text-dark text-left">Mobile No.*</label>
                                <input class="form-control w-50" type="number" name="mobile" id="mobile"  placeholder="Enter Mobile No." required>
                            </div>
                            <div class="d-block mb-2 text-dark text-left">
                                <button type="submit" class="btn secondary-solid-btn mt-3" style="pointer-events: all; cursor: pointer;">Pay Now</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact us promo end-->
    <!--header section end-->
    <section class="contact-us-promo pt-100">
    </section>

    <script src="https://checkout.flutterwave.com/v3.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(function () {
            $("#makePaymentForm").submit(function (e) {
                e.preventDefault();
                var name = $("#name").val();
                var email = $("#email").val();
                var amount = $("#amount").val();
                var mobile = $("#mobile").val();
                // make our payment
                makePayment(amount,email,mobile,name);
            });
        });   

      function makePayment(amount,email,phone_number,name) {
        FlutterwaveCheckout({
          public_key: "FLWPUBK-02924a33a68acdabf5bf1fb7d631a901-X",
          tx_ref: "RX1_{{substr(rand(0,time()),0,7)}}",
          amount,
          currency: "NGN",
          country: "NG",
          payment_options: " ",
          customer: {
            email,
            phone_number,
            name,
          },
          callback: function (data) {
            var transaction_id = data.transaction_id;
            // make ajax request
            var _token = $("input[name='_token']").val();
            $.ajax({
                type: "post",
                url: "{{URL::to('verifypayment')}}",
                data: {
                    transaction_id,
                    _token
                },
                dataType: "dataType",
                success: function (response) {
                    console.log(response);
                }
            });
          },
          onclose: function() {
            // close modal
          },
          customizations: {
            title: "My store",
            description: "Payment for items in cart",
            logo: "https://s3-us-west-2.amazonaws.com/hp-cdn-01/uploads/orgs/flutterwave_logo.jpg?69",
          },
        });
      }
    </script>
@endsection