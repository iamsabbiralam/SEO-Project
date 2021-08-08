@extends('layouts.guest')
@section('title', 'Login - V.S.L Concepts Engagment Hub')

@section('content')


<section class="hero-section full-screen gray-light-bg">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center">

            <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">
                <!-- Image -->
                <div class="bg-cover vh-100 ml-n3 gradient-overlay" style="background-image: url(img/slider-img-5.jpg);">
                    <div class="position-absolute login-signup-content">
                        <div class="position-relative text-white col-md-12 col-lg-7">
                            <h2 class="text-white">Login !</h2>
                            <p>Login to your V.S.L CONCEPTS ENGAGMENT HUB Account and start earning money</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                <div class="login-signup-wrap px-4 px-lg-5 my-5">
                    <!-- Heading -->
                    <h1 class="text-center mb-1">
                        Sign In
                    </h1>
                    <p class="text-center mb-5">
                        Free access to our dashboard.
                    </p>

                    <!--login form-->
                    <form class="login-signup-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label class="pb-1">Email Address</label>
                            <div class="input-group input-group-merge">
                                <div class="input-icon">
                                    <span class="ti-email"></span>
                                </div>
                                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="name@yourdomain.com">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- Password -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label class="pb-1">Password</label>
                                </div>
                                <div class="col-auto">
                                    <a href="{{ route('password.request') }}" class="form-text small text-muted">
                                        Forgot password?
                                    </a>
                                </div>
                            </div>
                            <div class="input-group input-group-merge">
                                <div class="input-icon">
                                    <span class="ti-lock"></span>
                                </div>
                                <input type="password" name="password" id="password" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 offset-md-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Submit -->
                        <button class="btn btn-block secondary-solid-btn border-radius mt-4 mb-3">
                            Sign in
                        </button>

                        <!-- Link -->
                        <p class="text-center">
                            <small class="text-muted text-center">
                                Don't have an account yet? <a href="{{ route('register') }}">Sign up</a>.
                            </small>
                        </p>

                    </form>
                </div>
            </div>
        </div> <!-- / .row -->
    </div>
</section>
@endsection
