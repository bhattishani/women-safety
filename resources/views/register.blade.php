@extends('layouts.web')

@section('banner-section')
<!-- BANNER-SECTION -->
<div class="home-banner-section overflow-hidden py-5">
    <div class="banner-container-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 mb-md-0 mb-4  text-center">
                    <div class="about-banner-text" data-aos="fade-up">
                        <h1 class="text-white about-h1" data-aos="zoom-out-left">Create Your RedLight Women Safety Account</h1>
                        <div class="about-btn">
                            <a href="{{ route("register") }}" class="text-decoration-none">Home <span class="about-text-color"> / Registration</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 mb-md-0 mb-4">
                    <div class="about-us-section-page contact-us-section py-5" data-aos="fade-up">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="about-section-form">
                                    <p class="text-white banner-paragraph" data-aos="zoom-out-right">Welcome to RedLight Women Safety! We're excited to have you join our community of empowered women. Please complete the registration form below to get started:</p>
                                    @if (session()->has("message"))
                                        <div class="alert alert-info">{{ session("message") }}</div>
                                    @endif
                                    <form method="POST" action="{{ route("register") }}">
                                        @csrf
                                        <div class="form-group contact-form-margin">
                                            <input type="text" class="form-control input-text" id="validationCustom02" placeholder="Your Name" required="" name="name">
                                        </div>
                                        <div class="form-group contact-form-margin">
                                            <input type="email" class="form-control input-text" id="validationCustom02" placeholder="Your Email" required="" name="email">
                                        </div>
                                        <div class="form-group contact-form-margin">
                                            <input type="password" class="form-control input-text" id="validationCustom02" placeholder="Your Password" required="" name="password">
                                        </div>
                                        <div class="contact-section-btn text-center">
                                            <button type="submit" class="btn btn-primary hover-effect">Register with RedLight Women Safety</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-12 my-5">
                                <h6>By register, you agree to our Terms of Service and Privacy Policy.</h6>
                                <p>
                                    If you encounter any issues or need assistance, please contact our support team at {{ config("app.mail_id") }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('content')

@endsection
