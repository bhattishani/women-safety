@extends('layouts.web')

@section('banner-section')
<!-- BANNER-SECTION -->
<div class="home-banner-section overflow-hidden py-5">
    <div class="banner-container-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 mb-md-0 mb-4  text-center">
                    <div class="about-banner-text" data-aos="fade-up">
                        <h1 class="text-white about-h1" data-aos="zoom-out-left">Contact Us</h1>
                        <p class="text-white banner-paragraph" data-aos="zoom-out-right">At RedLight Women Safety, your safety and well-being are our top priorities. If you have questions, suggestions, or need assistance, please don't hesitate to get in touch with our dedicated support team. We are here to provide the help and information you need.</p>
                        <div class="about-btn">
                            <a href="{{ route("contact-us") }}" class="text-decoration-none">Home <span class="about-text-color"> / Contact</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 mb-md-0 mb-4">
                    <div class="about-us-section-page contact-us-section" data-aos="fade-up">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <h3 class="contact-us-title" data-aos="fade-up-left">We're Here to Assist You</h3>
                                <ul class="list-unstyled about-us-list">
                                    <li class="contact-li">
                                        <div class="icons-rounded-box-contact">
                                            <figure class="mb-0"><img src="assets/images/contact-icon1.png" alt=""></figure>
                                        </div>
                                        <div class="contact-content">
                                            <span class="contact-title">Where We Are:</span>
                                            <span class="contact-parah">121 King Street Melbourne, 3000, Australia</span></div>
                                    </li>

                                    <li class="contact-li">
                                        <div class="icons-rounded-box-contact">
                                            <figure class="mb-0"><img src="assets/images/contact-icon2.png" alt="">
                                            </figure>
                                        </div>
                                        <div class="contact-content">
                                            <span class="contact-title">Phone:</span>
                                            <span class="contact-parah">+1 234 567 89 0 <span class="pr-2 pl-2">I </span> +1 234 567 89 0</span>
                                        </div>
                                    </li>
                                    <li class="contact-li">
                                        <div class="icons-rounded-box-contact">
                                            <figure class="mb-0"><img src="assets/images/contact-icon3.png" alt="">
                                            </figure>
                                        </div>
                                        <div class="contact-content">
                                            <span class="contact-title">Email:</span>
                                            <span class="contact-parah">info@redlightwomensafety.com</span>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="about-section-form">
                                    @if (session()->has("message"))
                                        <div class="alert alert-info">{{ session("message") }}</div>
                                    @endif
                                    <form method="POST" action="{{ route("contact.store") }}">
                                        @csrf
                                        <div class="form-group contact-form-margin">
                                            <input type="text" class="form-control input-text" id="validationCustom01" placeholder="Your Name" name="name">
                                        </div>
                                        @error("name")
                                            <div class="alert alert-danger p-2 my-3">{{ $message }}</div>
                                        @enderror
                                        <div class="form-group contact-form-margin">
                                            <input type="text" class="form-control input-text" id="validationCustom02" placeholder="Your Email" name="email">
                                            @error("email")
                                                <div class="alert alert-danger p-2 my-3">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group contact-form-margin">
                                            <input type="text" class="form-control input-text" id="validationCustom03" placeholder="Subject" name="subject">
                                            @error("subject")
                                                <div class="alert alert-danger p-2 my-3">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group contact-form-margin-text-area">
                                            <textarea name="message" id="message" cols="10" rows="10" class="form-control" placeholder="Your Message"></textarea>
                                            @error("message")
                                                <div class="alert alert-danger p-2 my-3">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="contact-section-btn text-center">
                                            <button type="submit" class="btn btn-primary hover-effect">Send Message</button>
                                        </div>
                                    </form>
                                </div>
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
