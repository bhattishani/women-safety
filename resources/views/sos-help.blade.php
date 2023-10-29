@extends('layouts.web')


@section('banner-section')
    <!-- BANNER-SECTION -->
    <div class="home-banner-section overflow-hidden">
        <div class="banner-container-box my-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-md-0 mb-4  text-center">
                        <div class="about-banner-text" data-aos="fade-up">
                            <h1 class="text-white about-h1">Need Help?</h1>
                            <p class="text-white banner-paragraph">At RedLight Women Safety, we're driven by a singular mission: to empower women and ensure their safety in every facet of life. We understand that women often face unique challenges, and our platform is designed to address those needs.</p>
                            <div class="about-btn">
                                <a href="/sos-help" class="text-decoration-none">Home <span class="about-text-color"> / SOS Help</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <section class="about-us-section-start aboutus-page">
                        <div class="about-right-icon position-relative">
                            <figure class="whyus-icon"><img src="assets/images/about-us-section-right-icon.png" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <div class="container mb-5">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 d-flex align-self-streach">
                                    <div class="about-us-content about-us-content-service-box btn-talk" data-aos="fade-up">
                                        <div class="icons-rounded-box">
                                            <figure class="mb-0"><img src="assets/images/about-round-icon1.png" alt="">
                                            </figure>
                                        </div>
                                        <h4>Play Emergency Sound</h4>
                                        <p class="security-services-p">Play Emergency Sound: A quick, attention-grabbing feature to alert others and seek assistance in urgent situations. Your safety matters.</p>
                                        <audio id="myAudio" src="{{ asset("fire_alarm.mp3") }}" style="display:none" preload="auto"></audio>
                                        <a href="javascript:void(0)" id="play-fire-alarm" onclick="togglePlay()" style="padding:.5rem 2rem !important">Play <i class="fa fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 d-flex align-self-streach">
                                    <div class="about-us-content about-us-content-service-box btn-talk" data-aos="fade-up">
                                        <div class="icons-rounded-box">
                                            <figure class="mb-0 icon-color"><img src="assets/images/about-round-icon2.png" alt="">
                                            </figure>
                                        </div>
                                        <h4>Find nearest safe places</h4>
                                        <p class="security-services-p">Discover the Nearest Safe Places: Easily locate secure environments for your peace of mind with RedLight Women Safety.</p>
                                        <a href="javascript:void(0)" id="findSafePlaces" style="padding:.5rem 2rem !important">Find Now <i class="fa fa-location"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 d-flex align-self-streach">
                                    <div class="about-us-content about-us-content-service-box btn-talk" data-aos="fade-up">
                                        <div class="icons-rounded-box">
                                            <figure class="mb-0"><img src="assets/images/about-round-icon3.png" alt="">
                                            </figure>
                                        </div>
                                        <h4>Send SOS Message</h4>
                                        @if (session()->has("message"))
                                            <div class="alert alert-info">{{ session("message") }}</div>
                                        @endif
                                        <form action="{{ route("sos-help") }}" id="sos-form" method="POST" class="contact-us-section" style="padding: 1rem 0 !important">
                                            @csrf
                                            <textarea name="message" class="form-control input-text" id="" cols="30" rows="3" placeholder="Enter SOS Message"></textarea>
                                        </form>
                                        <a href="javascript:void(0)" id="send-sos-message" style="padding:.5rem 2rem !important">Send Message <i class="fa  fa-paper-plane"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>
    <div id="map"></div>
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
<div class="modal" id="safePlaceModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content" style="background-color: var(--e-global-color-dark-icons-background)">
      <div class="modal-header">
        <h5 class="modal-title">Nearest Safe Places</h5>
        <button type="button" class="close" class="text-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="safePlaceContainer">

      </div>
      <div class="modal-footer btn-talk">
        <a type="button" data-dismiss="modal">Close</a>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTlK_fRsc9bikSTO1FotzGPJ1DGpwM7zs&libraries=places"></script>
    <script>
        var myAudio = document.getElementById("myAudio");
        var isPlaying = false;

        function togglePlay() {
            if(isPlaying){
                myAudio.pause();
                $("#play-fire-alarm").html("Play <i class='fa fa-play'></i>")
            }else{
                myAudio.play();
                $("#play-fire-alarm").html("Pause <i class='fa fa-pause'></i>")
            }
        };

        myAudio.onplaying = function() {
            isPlaying = true;
        };
        myAudio.onpause = function() {
            isPlaying = false;
        };

        window.addEventListener("DOMContentLoaded", ()=>{
            $("#send-sos-message").on("click",function(e){
                document.getElementById("sos-form").submit();
            })
            var map;
            var requestCount = 0;
            var latitude,longitude;
            function initialize(latitude,longitude) {
                // Create a map centered in Pyrmont, Sydney (Australia).
                map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: latitude, lng: longitude},
                    zoom: 15
                });

                // Search for Google's office in Australia.
                var request = {
                    location: map.getCenter(),
                    type: ['hospital'],
                    rankBy:google.maps.places.RankBy.DISTANCE
                };

                var service = new google.maps.places.PlacesService(map);
                service.nearbySearch(request, callback);

                var request = {
                    location: map.getCenter(),
                    type: ['police'],
                    rankBy:google.maps.places.RankBy.DISTANCE
                };

                var service = new google.maps.places.PlacesService(map);
                service.nearbySearch(request, callback);

                var request = {
                    location: map.getCenter(),
                    type: ['drugstore'],
                    rankBy:google.maps.places.RankBy.DISTANCE
                };

                var service = new google.maps.places.PlacesService(map);
                service.nearbySearch(request, callback);
            }

            let hospitals = [];
            let police = [];
            let drugstore = [];

            // Checks that the PlacesServiceStatus is OK, and adds a marker
            // using the place ID and location from the PlacesService.
            function callback(results, status) {
                if (status == google.maps.places.PlacesServiceStatus.OK) {
                    requestCount++;
                    $.each(results,(i,v)=>{
                        const place = {
                            "name":v?.name,
                            "map_url":`https://www.google.com/maps/search/?api=1&query=Google&query_place_id=${v?.place_id}`,
                            "place_id":v?.place_id,
                            "address":v?.formatted_address,
                            "lat" : v?.geometry?.location?.lat(),
                            "lng" : v?.geometry?.location?.lng(),
                        };

                        if(v?.types?.includes("hospital")){
                            hospitals.push(place);
                        }
                        else if(v?.types?.includes("police")){
                            police.push(place);
                        }
                        else if(v?.types?.includes("drugstore")){
                            drugstore.push(place);
                        }
                    })
                }
                if(requestCount==3){
                    let html = ``;
                    html += `<h3>Hospitals:</h3>`;
                        html += `<div class='row'>`;
                                $.each(hospitals,(i,v)=>{
                                    html += `<div class='col-md-6 d-flex align-self-stretch'>`;
                                    html += `<a href="${v.map_url}" target="_blank" class="list-group-item list-group-item-action">${v.name}</a>`
                                    html += `</div>`;
                                })
                        html += `</div>`;
                    html += `<h3>Police Stations:</h3>`;
                    html += `<div class='row'>`;
                        $.each(hospitals,(i,v)=>{
                        html += `<div class='col-md-6 d-flex align-self-stretch'>`;
                            html += `<a href="${v.map_url}" target="_blank" class="list-group-item list-group-item-action">${v.name}</a>`
                            html += `</div>`;
                        })
                        html += `</div>`;
                    html += `<h3>Medicals:</h3>`;
                    html += `<div class='row'>`;
                                $.each(hospitals,(i,v)=>{
                                    html += `<div class='col-md-6 d-flex align-self-stretch'>`;
                                    html += `<a href="${v.map_url}" target="_blank" class="list-group-item list-group-item-action">${v.name}</a>`
                                    html += `</div>`;
                                })
                        html += `</div>`;
                    $("#safePlaceContainer").html(html);
                    $("#safePlaceModal").modal("show");
                    $("#findSafePlaces").html('Find Now <i class="fa fa-location"></i>');
                    $("#findSafePlaces").prop("disabled", false);
                    requestCount = 0;
                }
            }
            const successCallback = (position) => {
                latitude = position.coords.latitude;
                longitude = position.coords.longitude;
                initialize(latitude,longitude);
                $("#findSafePlaces").html("Searching Places...<i class='fa fa-place-of-worship'></i>");
            };

            const errorCallback = (error) => {
                console.log(error);
                $("#findSafePlaces").html("Location Permission Denied...");
            };

            $("#findSafePlaces").on("click",e=>{
                e.preventDefault();
                $(e.target).html("Finding...");
                $(e.target).prop("disabled",true);
                setTimeout(() => {
                    $(e.target).prop("disabled",false);
                }, 3000);
                navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
            })
        })
    </script>
@endsection
