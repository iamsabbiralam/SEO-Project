@extends('layouts.guest')
@section('title', 'Reset Password - V.S.L Concepts Engagment Hub')

@section('content')

<section class="hero-section full-screen gray-light-bg">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">
                    <!-- Image -->
                    <div class="bg-cover vh-100 ml-n3 gradient-overlay" style="background-image: url(img/slider-img-5.jpg);">
                        <div class="position-absolute login-signup-content">
                            <div class="position-relative text-white col-md-12 col-lg-7">
                                <h2 class="text-white">Reset Password</h2>
                                <p>Reset your password of V.S.L CONCEPTS ENGAGMENT HUB account if you forget your password. It's d only takes a minute.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-6 col-xl-4 px-lg-6">
                    <div class="login-signup-wrap px-4 px-lg-5">
                        <!-- Heading -->
                        <h1 class="text-center mb-1">
                            Reset
                        </h1>

                        <!-- Subheading -->
                        <p class="text-muted text-center mb-5">
                            Free access to our dashboard.
                        </p>

                        <!-- Form -->
                        <form class="login-signup-form" method="POST" action="{{ route('password.email') }}">
                        @csrf
                            
                            <div class="form-group">
                                <!-- Label -->
                                <label class="pb-1">
                                    Email Address
                                </label>
                                <!-- Input group -->
                                <div class="input-group input-group-merge">
                                    <div class="input-icon">
                                        <span class="ti-email color-primary"></span>
                                    </div>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <!-- Submit -->
                            <button type="submit" class="btn btn-primary">
                                {{ __('Send Password Reset Link') }}
                            </button>

                        </form>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div>
    </section>
@endsection