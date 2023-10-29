@extends('layouts.web')


@section('banner-section')
    <!-- BANNER-SECTION -->
    <div class="home-banner-section overflow-hidden">
        <div class="banner-container-box my-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-md-0 mb-4  text-center">
                        <div class="about-banner-text" data-aos="fade-up">
                            <h1 class="text-white about-h1">About Us</h1>
                            <p class="text-white banner-paragraph">At RedLight Women Safety, we're driven by a singular mission: to empower women and ensure their safety in every facet of life. We understand that women often face unique challenges, and our platform is designed to address those needs.</p>
                            <div class="about-btn">
                                <a href="/about-us" class="text-decoration-none">Home <span class="about-text-color"> / About</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-md-0 mb-4">
                        <div class="about-us-section-page" data-aos="fade-up">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <h3 data-aos="zoom-out-left">24/7 Women's Safety Hub</h3>
                                    <p>Empowering Women with Comprehensive Safety Solutions</p>
                                    <p>At RedLight Women Safety, we're committed to ensuring women's safety around the clock. Our Women's Safety Hub is your go-to destination for a range of safety services and support.</p>
                                    <ul class="list-unstyled about-us-list">
                                        <li><i class="fa-solid fa-shield-virus"></i><a href="index.html" class="text-decoration-none list-text">Real-time Location Tracking</a></li>
                                        <li><i class="fa-solid fa-shield-virus"></i><a href="index.html" class="text-decoration-none list-text">Emergency Alerts</a></li>
                                        <li><i class="fa-solid fa-shield-virus"></i><a href="/about-us" class="text-decoration-none list-text">Safety Tips and Resources</a></li>
                                        <li><i class="fa-solid fa-shield-virus"></i><a href="services.html" class="text-decoration-none list-text">Community Chat for Support</a></li>
                                        <li><i class="fa-solid fa-shield-virus"></i><a href="services.html" class="text-decoration-none list-text">Quick Access to Emergency Services</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <div class="about-section-img">
                                        <figure class="mb-0"><img src="assets/images/about-us-page-right-img.png" alt="" class="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h4>
                                        We're dedicated to your safety every hour, every day.
                                    </h4>
                                    <p>Feel empowered, feel safe with RedLight Women Safety.</p>
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
<!-- CYBER-SECURITY-SECTION -->
<section class="cyber-security-section overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="cyber-content-img">
                    <figure class="mb-0"><img src="assets/images/cyber-security-left-img.png" alt="" class="cyber-security-provider-img">
                    </figure>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1"></div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="cyber-content py-3">
                    <h3>Empowering <span class="cyber-text">Women's</span> Safety</h3>
                    <h6>Your Confidence, Your Security</h6>
                    <p class="security-services-p">At RedLight Women Safety, we specialize in providing solutions exclusively tailored to women's safety and well-being. We recognize that women may encounter distinct challenges and concerns, which is why we are dedicated to addressing those needs.</p>
                    <p class="security-services-p cyber-p-margin-bottom">Our mission is to empower women with the confidence and tools needed to navigate life securely. With a deep understanding of the unique aspects of women's safety, we offer cutting-edge technology, support, and a nurturing community. Our commitment is unwavering: to create a world where women feel not only secure but self-assured.</p>
                    <div class="cyber-contact-btn">
                        <a href="{{ route("contact-us") }}" class="text-decoration-none">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- boxes-section -->
<div class="about-us-section-start cyber-boxes-section overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="about-us-content" data-aos="fade-up">
                    <div class="icons-rounded-box">
                        <figure class="mb-0"><img src="assets/images/cyber-section-icon1.png" alt="">
                        </figure>
                    </div>
                    <h3 class="counetr-heading">Our Vision</h3>
                    <h5 class="cyber-boxes-text">Empowering Women for a Safer Tomorrow</h5>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="about-us-content" data-aos="fade-up">
                    <div class="icons-rounded-box">
                        <figure class="mb-0 icon-color"><img src="assets/images/cyber-section-icon2.png" alt="">
                        </figure>
                    </div>
                    <h3 class="counetr-heading">Our Values</h3>
                    <h5 class="cyber-boxes-text">Empathy, Innovation, and Inclusivity</h5>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="about-us-content" data-aos="fade-up">
                    <div class="icons-rounded-box">
                        <figure class="mb-0"><img src="assets/images/cyber-section-icon3.png" alt="">
                        </figure>
                    </div>
                    <h3 class="counetr-heading">Our Impact</h3>
                    <h5 class="cyber-boxes-text">Supporting and Empowering Communities</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Clients_section -->
<section class="clients-section clients-section-right-img1 py-5">
    <div class="position-relative">
        <figure class="about2-left-img"><img src="assets/images/about-section2-left-img.png" alt="" class="img-fluid">
        </figure>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h3 class="text-center">Hear What Our Users Have to Say</h3>
                <p class="text-center client-section-main-p">Discover the stories and experiences of women who have found confidence, empowerment, and safety through RedLight Women Safety. Their words speak to the impact of our mission.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-self-stretch">
                <div class="clients-outer-box  position-relative" data-aos="fade-up">
                    <figure class="clients-outer-box-figure"><img src="assets/images/client-section-img1.png" alt=""></figure>
                    <figure class="position-absolute icon-figure-quotes"><img src="assets/images/quotes-icon.png" alt=""></figure>
                    <div class="clients-right-content" data-aos="fade-up">
                        <span class="spencer-span">Jane Doe</span>
                    </div>
                    <p class="clients-sectionp2">RedLight Women Safety has given me peace of mind. I feel more secure knowing I can share my location with my loved ones instantly.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-self-stretch">
                <div class="clients-outer-box  position-relative" data-aos="fade-up">
                    <figure class="clients-outer-box-figure"><img src="assets/images/client-section-img2.png" alt=""></figure>
                    <figure class="position-absolute icon-figure-quotes"><img src="assets/images/quotes-icon.png" alt=""></figure>
                    <div class="clients-right-content" data-aos="fade-up">
                        <span class="spencer-span">Sarah Smith</span>
                    </div>
                    <p class="clients-sectionp2">The community chat is a game-changer. It's a safe space to share, learn, and support each other.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
