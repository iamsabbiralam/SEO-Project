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
                        <h1 class="text-white mb-0">Welcome {{ Auth::user()->name }}</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                <li class="list-inline-item breadcrumb-item active">Profile</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--header section end-->

    <!--contact us promo start-->
    <section class="contact-us-promo pt-100" style="background:#C0C0C0">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-12">
                    <div class="section-heading text-white text-center mb-5">
                    	@if ($messege = Session::get('success'))
							<div class="form-group">
							    <button disabled  style="background:black;color:white">
                                    {{ $messege }}
                                </button>
							</div>
						@endif
                        <h3 class="text-left">Change Your Name</h3>
                        <form action="{{ route('_profile') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="d-block mb-2 text-dark text-left">User Name *</label>
                                <input class="form-control w-50" type="text" name="name" value="{{ Auth::user()->name }}" placeholder="Enter your Name" required>
                            </div>
                            <div class="form-group text-left">
                                <button type="submit" class="btn secondary-solid-btn mt-3" style="pointer-events: all; cursor: pointer;">
                                    Change
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact us promo end-->
    <hr>

    <!--contact us promo start-->
    <section class="contact-us-promo pt-100"  style="background:#C0C0C0">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-12">
                    <div class="section-heading text-white text-center mb-5">
                        <h3 class="text-left">Change Your Password</h3>
                        <form action="{{ route('password') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="d-block mb-2 text-dark text-left">Old Password *</label>
                                <input class="form-control w-50" type="password" name="old_password" placeholder="Enter your Old Password" required>
                            </div>
                            <div class="form-group">
                                <label class="d-block mb-2 text-dark text-left">New Password *</label>
                                <input class="form-control w-50" type="password" name="password" placeholder="Enter your New Password" required>
                            </div>
                            <div class="form-group">
                                <label class="d-block mb-2 text-dark text-left">Confirm New Password *</label>
                                <input class="form-control w-50" type="password" name="password_confirmation" placeholder="Enter your New Password to Confirm" required>
                            </div>
                            <div class="form-group text-left">
                                <button type="submit" class="btn secondary-solid-btn mt-3" style="pointer-events: all; cursor: pointer;">
                                    Change
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact us promo end-->
    <hr>

    <!--contact us promo start-->
    <section class="contact-us-promo pt-100"  style="background:#C0C0C0">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-12">
                    <div class="section-heading text-white text-center mb-5">
                        <h3 class="text-left">{{ __('Delete Account') }}</h3>
                        <h5 class="text-left">{{ __('Permanently delete your account.') }}</h5>
                        <p class="text-left" style="color: black"> {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}</p>
                        
                        <div id="demo">
	                        <div class="text-left">
								<button onclick="passFunction()" class="btn secondary-solid-btn mt-3" style="pointer-events: all; cursor: pointer;">Confirm</button>
	                        </div>
                    	</div>
                    	<div id="pass">
	                       
                    	</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact us promo end-->


    <script>
	function passFunction() {
	  $('#pass').html('<form action="{{ route('delete') }}" method="post">@csrf<div class="form-group"><label class="d-block mb-2 text-dark text-left">Password for Confirmation *</label><input class="form-control w-50" type="password" name="password" placeholder="Input your password to Delete Your Account" required></div><div class="text-left"><button class="btn btn-danger mt-3" style="pointer-events: all; cursor: pointer;">Delete</button></div>');
      $('#demo').empty();
	}
	</script>

@endsection