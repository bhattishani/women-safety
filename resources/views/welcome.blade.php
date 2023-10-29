@extends("layouts.web")

@section('banner-section')
    <!-- BANNER-SECTION -->
    <div class="home-banner-section overflow-hidden">
        <div class="banner-container-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-md-0 mb-4 text-md-left text-center">
                        <div class="home-banner-text" data-aos="fade-up">
                            <h5 class="text-white artificial-text">Welcome to RedLight Women Safety</h5>
                            <p class="text-white banner-paragraph">
                                At RedLight Women Safety, our mission is to empower women and ensure their safety in all situations. We understand the unique challenges that women may face, and we're here to provide support, resources, and tools to help you stay safe and connected.</p>
                            <div class="banner-btn discover-btn-banner">
                                <a href="{{ route('about-us') }}" class="text-decoration-none">Discover More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="banner-img-content position-relative" data-aos="fade-up">
                            <figure class="banner-img mb-0 wow slideInRight" data-wow-duration="2s">
                                <img class="img-fluid banner-img-width" src="assets/images/banner-img.png" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('content')
    <!-- ICONS_SECTION -->
    <section class="icons-section overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="text-center p-0" data-aos="fade-zoom-in">Trusted Over 2300+ Companies in the World</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-sm-4 col-6 mb-md-0 mb-4 text-center d-table align-items-center">
                    <div class="logo-box" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <figure class="mb-0 comapanies-icon-margin icons-mb"><img src="assets/images/companies-icon1.png" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-6 mb-md-0 mb-4 text-center d-table align-items-center">
                    <div class="logo-box" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <figure class="mb-0 comapanies-icon-margin icons-mb"><img src="assets/images/companies-icon2.png" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-6 mb-md-0  mb-4 text-center d-table align-items-center">
                    <div class="logo-box" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <figure class="mb-0 comapanies-icon-margin-hype icons-mb"><img src="assets/images/companies-icon3.png" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-6 mb-md-0 mb-4 text-center d-table align-items-center">
                    <div class="logo-box" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <figure class="mb-0 comapanies-icon-margin-3"><img src="assets/images/companies-icon4.png" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-6 mb-md-0 mb-4 text-center d-table align-items-center">
                    <div class="logo-box" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <figure class="mb-0 comapanies-icon-margin-3"><img src="assets/images/companies-icon5.png" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-6 mb-md-0 mb-4 text-center d-table align-items-center">
                    <div class="logo-box" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <figure class="mb-0 mt-0 comapanies-icon-margin-3 companies-icon6"><img src="assets/images/companies-icon6.png" alt=""> </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT-US_SECTION -->
    <section class="about-us-section-start">
        <div class="about-right-icon position-relative" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <figure class="whyus-icon"><img src="assets/images/about-us-section-right-icon.png" alt="" class="img-fluid">
            </figure>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center" data-aos="fade-up" data-aos-anchor-placement="top-bottom">Why Choose RedLight Women Safety?</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 d-flex align-self-stretch my-3">
                    <div class="about-us-content" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                        <div class="icons-rounded-box">
                            <figure class="mb-0"><img src="assets/images/about-round-icon1.png" alt="">
                            </figure>
                        </div>
                        <h4>Real-time Location Tracking</h4>
                        <p class="security-services-p">Our real-time location tracking feature keeps you connected to your loved ones and provides peace of mind.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 d-flex align-self-stretch my-3">
                    <div class="about-us-content" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                        <div class="icons-rounded-box">
                            <figure class="mb-0 icon-color"><img src="assets/images/about-round-icon2.png" alt="">
                            </figure>
                        </div>
                        <h4>Emergency Alerts</h4>
                        <p class="security-services-p">With just a tap, you can send SOS alerts to your predefined emergency contacts, giving them your precise location in times of need.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 d-flex align-self-stretch my-3">
                    <div class="about-us-content" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                        <div class="icons-rounded-box">
                            <figure class="mb-0"><img src="assets/images/about-round-icon3.png" alt="">
                            </figure>
                        </div>
                        <h4>Safety Tips and Resources</h4>
                        <p class="security-services-p">Access a wealth of information on safety tips, legal rights, and self-defense techniques to stay informed and prepared.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-self-stretch my-3">
                    <div class="about-us-content" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                        <div class="icons-rounded-box">
                            <figure class="mb-0"><img src="assets/images/about-round-icon3.png" alt="">
                            </figure>
                        </div>
                        <h4>Community Chat for Support</h4>
                        <p class="security-services-p">Join our supportive community where you can discuss concerns, share experiences, and seek advice from like-minded individuals.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-self-stretch my-3">
                    <div class="about-us-content" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                        <div class="icons-rounded-box">
                            <figure class="mb-0"><img src="assets/images/about-round-icon3.png" alt="">
                            </figure>
                        </div>
                        <h4>Quick Access to Emergency Services</h4>
                        <p class="security-services-p">RedLight Women Safety provides fast and easy access to local emergency services, ensuring help is just a click away.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CYBER-SECURITY-SECTION -->
    <section class="cyber-security-section overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <div class="cyber-content-img" data-aos="fade-up-left">
                        <figure class="mb-0"><img src="assets/images/cyber-security-left-img.png" alt="" class="cyber-security-provider-img">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1"></div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="cyber-content" data-aos="fade-up-right">
                        <h3>Ensuring <span class="cyber-text">Women's Safety</span> with Dedication</h3>
                        <p class="security-services-p">At RedLight Women Safety, we are dedicated to providing the best safety solutions for women. Our mission is to empower women, giving them the confidence to navigate their world securely. We offer advanced location tracking, emergency alerts, and a supportive community to foster a sense of security. Join us in our commitment to women's safety.</p>
                        <div class="cyber-contact-btn">
                            <a href="{{ route("contact-us") }}" class="text-decoration-none">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CYBER-SECURITY-SOLUTION -->
    <section class="cyber-security-section cyber-security-section2 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="cyber-content" data-aos="fade-up-left">
                        <h3>Empowering Women with <span class="cyber-text">Comprehensive Safety </span>Solutions</h3>
                        <p class="security-services-p">At RedLight Women Safety, we are unwavering in our commitment to empowering women with comprehensive safety solutions. Our platform is meticulously designed to cater to the unique safety needs of women. We prioritize their well-being and peace of mind through a range of features, including real-time location tracking, emergency alerts, safety tips, and a nurturing community of women ready to support and share knowledge.</p>
                        <p class="security-services-p cyber-p-margin-bottom">We believe that every woman deserves to feel secure in her everyday life, and we are here to make that a reality. Join our mission and be a part of the change for safer and more confident living.</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 text-md-right text-center">
                    <div class="cyber-content-img-right" data-aos="fade-up-right">
                        <figure class="mb-0"><img src="assets/images/cyber-security-right-img.png" alt="" class="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Accordian-Section -->
    <section class="cyber-security-section accordian-section overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="faq-content-img" data-aos="fade-right">
                        <figure class="mb-0"><img src="assets/images/accordian-left-img.png" alt="" class="">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="cyber-content accordian-text" data-aos="fade-up">
                        <h3>General Questions Frequently Asked Questions?</h3>
                        <div class="accordian-inner">
                            <div id="accordion1">
                                <div class="accordion-card">
                                    <div class="" id="headingFour">
                                        <a href="#" class="btn btn-link text-decoration-none" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <h5 class="faq-btn-text">How does the real-time location tracking work?</h5>
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour">
                                        <div class="card-body">
                                            <p class="text-left accordian-text-color">
                                                Our location tracking feature uses GPS technology to pinpoint your exact location and share it with your selected contacts. It ensures that your loved ones can always find you in case of an emergency.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="cyber-content accordian-text">
                        <div class="accordian-inner">
                            <div id="accordion2">
                                <div class="accordion-card">
                                    <div class="" id="headingFive">
                                        <a href="#" class="btn btn-link collapsed text-decoration-none" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            <h5 class="faq-btn-text">What should I do in an emergency situation?</h5>
                                        </a>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive">
                                        <div class="card-body">
                                            <p class="text-left accordian-text-color">
                                                In an emergency, simply press the SOS button in the app. RedLight Women Safety will immediately send an alert to your designated emergency contacts, along with your location.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 3 -->
                    <div class="cyber-content accordian-text">
                        <div class="accordian-inner">
                            <div id="accordion3">
                                <div class="accordion-card">
                                    <div class="" id="headingSix">
                                        <a href="#" class="btn btn-link collapsed text-decoration-none" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            <h5 class="faq-btn-text">Is my personal information safe on RedLight Women Safety?</h5>
                                        </a>
                                    </div>
                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix">
                                        <div class="card-body">
                                            <p class="text-left accordian-text-color">
                                                    Yes, your privacy and security are paramount to us. We use robust encryption and security measures to protect your personal information, and it is only shared when you activate the emergency alert.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 4 -->
                    <div class="cyber-content accordian-text">
                        <div class="accordian-inner">
                            <div id="accordion4">
                                <div class="accordion-card">
                                    <div class="" id="headingSeven">
                                        <a href="#" class="btn btn-link collapsed text-decoration-none" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            <h5 class="faq-btn-text">How can I connect with the community for support?</h5>
                                        </a>
                                    </div>
                                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven">
                                        <div class="card-body">
                                            <p class="text-left accordian-text-color">
                                                    You can join our community chat within the app. Share experiences, ask for advice, or simply connect with other users who are here to provide support and encouragement.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT-TEAM-SECTION -->
    <section class="about-us-section-start about-teams-section overflow-hidden">
        <div class="about-right-icon position-relative" data-aos="fade-up-right">
            <figure class="whyus-icon"><img src="assets/images/about-us-section-right-icon.png" alt="" class="img-fluid">
            </figure>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center" data-aos="fade-up">Our Professional Team</h3>
                    <p class="text-center" data-aos="fade-up-left">Committed to Your Safety</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="about-teams-inner" data-aos="fade-up">
                        <div class="about-team">
                            <div class="icons-rounded-box">
                                <figure class="mb-0"><img src="assets/images/about-team-img1.png" alt="" class="img-fluid teams-img-border">
                                </figure>
                            </div>
                        </div>
                        <h4 class="about-team-members-h4">Riya Sharma</h4>
                        <p class="about-team-title">Security Specialist</p>
                        <p class="teams-section-p">Protecting women with cutting-edge security solutions. Passionate about your safety.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="about-teams-inner" data-aos="fade-up">
                        <div class="about-team">
                            <div class="icons-rounded-box">
                                <figure class="mb-0"><img src="assets/images/about-team-img2.png" alt="" class="img-fluid teams-img-border">
                                </figure>
                            </div>
                        </div>
                        <h4 class="about-team-members-h4">Vikram Singh</h4>
                        <p class="about-team-title">Tech Guru</p>
                        <p class="teams-section-p">Ensuring our technology keeps you connected and secure. Committed to innovation.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="about-teams-inner" data-aos="fade-up">
                        <div class="about-team">
                            <div class="icons-rounded-box">
                                <figure class="mb-0"><img src="assets/images/about-team-img3.png" alt="" class="img-fluid teams-img-border">
                                </figure>
                            </div>
                        </div>
                        <h4 class="about-team-members-h4">Anika Patel</h4>
                        <p class="about-team-title">Support Coordinator</p>
                        <p class="teams-section-p">Providing round-the-clock support and assistance. Your safety is our priority.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blogs-Section -->
    <section class="about-us-section-start blogs-section-starts overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center" data-aos="fade-up">Latest News & Blog</h3>
                    <p class="text-center" data-aos="fade-up-left">Stay Informed, Stay Safe</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 d-flex align-self-stretch">
                    <div class="blogs-section">
                        <a href="single-post.html">
                            <div class="images-blog" data-aos="fade-up">
                                <figure class="mb-0"><img class="img-fluid" src="assets/images/blog-section-img1.png" alt="">
                                </figure>
                            </div>
                            <h5 class="blogs-h5">10 Essential Self-Defense Tips for Women</h5>
                            <p class="blogs-p">Learn valuable self-defense techniques to boost your confidence and personal safety.</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 d-flex align-self-stretch">
                    <div class="blogs-section">
                        <a href="single-post.html">
                            <div class="images-blog" data-aos="fade-up">
                                <figure class="mb-0"><img class="img-fluid" src="assets/images/blog-section-img2.png" alt="">
                                </figure>
                            </div>
                            <h5 class="blogs-h5">Know Your Rights: A Guide to Women's Legal Protections</h5>
                            <p class="blogs-p">Understand your legal rights and protections as a woman, ensuring you can navigate any situation with confidence.</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 d-flex align-self-stretch">
                    <div class="blogs-section">
                        <a href="single-post.html">
                            <div class="images-blog" data-aos="fade-up">
                                <figure class="mb-0"><img class="img-fluid" src="assets/images/blog-section-img3.png" alt="">
                                </figure>
                            </div>
                            <h5 class="blogs-h5">Real Stories of Empowerment: Inspiring Women from Our Community</h5>
                            <p class="blogs-p">Read inspiring stories from women who have overcome challenges and found strength within our supportive community.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    @if (session()->has("message"))
        <script>
            window.alert("{{ session("message") }}");
        </script>
    @endif
@endsection
