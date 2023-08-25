@extends('layouts.cliente')
@section('hero')
<div class="container">
    <h2> Acrerca de Nosotros </h2>
</div>
@endsection

@section('content')
    <!-- ====== 2.3. About us section ====== -->
    <div class="about_img">
        <div data-aos="zoom-in" class="container d-flex justify-content-center">
            <img src="{{asset('ui/assets/Images/about/ab-img.png')}}" alt="img">
        </div>
    </div>
    <section class="about ab-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6" data-aos="fade-up">
                    <div class="d-flex gap-3 align-items-center">
                        <hr>
                        <h5>ABOUT US</h5>
                    </div>
                    <h2 class="h2_margin">Explore Our Services And Boost Your Online Presence
                    </h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    </p>
                    <div class="d-flex align-items-center mt-4 gap-3">
                        <i class="fa-solid fa-check"></i>
                        <h5>Lorem Ipsum is simply dummy text of the printing.
                        </h5>
                    </div>
                    <div class="d-flex align-items-center gap-3 mt-3">
                        <i class="fa-solid fa-check"></i>
                        <h5>Lorem Ipsum is simply dummy text of the printing.
                        </h5>
                    </div>
                    <div class="d-flex gap-lg-4 gap-md-2 gap-sm-4 gap-2 mt-md-5 mt-sm-4 mt-4">
                        <a href="services.html" class="btn_hover1">Get Started</a>
                    </div>
                </div>
                <div data-aos="fade-down" class="col-lg-6 col-md-6 mt-md-0 mt-sm-5 mt-5 position-relative d-flex justify-content-center align-items-center">
                    <div class="about-mask">
                        <figure>
                            <img src="assets/Images/about/about.png" alt="img">
                        </figure>
                    </div>
                    <div class="ab-count d-flex justify-content-center align-items-center flex-column text-center">
                        <div class="d-flex align-items-center justify-content-center">
                            <h2 class="count">12</h2>
                            <h2>+</h2>
                        </div>
                        <p>years of experience</p>
                    </div>
                    <div class="about-hr d-flex align-items-center gap-2">
                        <hr>
                        <h6>Who we are</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== End of 2.3. About us section ====== -->

    <!-- ====== 1.3. card section ====== -->
    <section class="feature ab-feature">
        <div class="container">
            <div class="ab-fa-hr d-flex align-items-center gap-2 mb-3">
                <hr>
                <h6>Creative Solution</h6>
            </div>
            <div class="row">
                <div data-aos="fade-up" class="col-lg-3 col-md-6">
                    <div>
                        <figure><img src="assets/Images/icon/feature1.png" class="feature-img1" alt="feature"></figure>
                        <h4>CUSTOMIZED SOLUTIONS</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever.
                        </p>
                    </div>
                </div>
                <div data-aos="fade-down" class="col-lg-3 col-md-6">
                    <div>
                        <figure><img src="assets/Images/icon/feature2.png" alt="feature"></figure>
                        <h4>ROI-DRIVEN APPROACH</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever.
                        </p>
                    </div>
                </div>
                <div data-aos="fade-up" class="col-lg-3 col-md-6">
                    <div>
                        <figure><img src="assets/Images/icon/feature3.png" alt="feature"></figure>
                        <h4>CREATIVE SOLUTION</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever.
                        </p>
                    </div>
                </div>
                <div data-aos="fade-down" class="col-lg-3 col-md-6">
                    <div>
                        <figure><img src="assets/Images/icon/feature4.png" alt="feature"></figure>
                        <h4>EXPERT TEAM</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== End of 1.3. card section ====== -->

    <!-- ====== 1.8. Experience section ====== -->
    <section class="experience ab-experience">
        <div class="container">
            <div class="row text-md-start text-sm-center text-center" data-aos="fade-up">
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex gap-3 justify-content-md-start justify-content-sm-center align-items-center justify-content-center">
                        <hr class="experience-hr1 m-0">
                        <h5>Experience</h5>
                    </div>
                    <h2 class="h2_margin">Grow Your Online Presence.</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever.
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-md-0 mt-sm-4 mt-4 d-flex align-items-center justify-content-md-end justify-content-sm-center justify-content-center">
                    <a href="services.html" class="btn_hover1">Get Started</a>
                </div>
                <hr>
            </div>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-6 col-md-6 position-relative d-flex justify-content-center" data-aos="zoom-in">
                    <div class="experience_mask">
                        <figure><img src="assets/Images/about/experience.png" alt="img"></figure>
                    </div>
                    <div class="experience-hr d-flex align-items-center gap-2">
                        <hr>
                        <h6> Our Expertise </h6>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-flex flex-column gap-lg-4 gap-md-3 gap-sm-4 gap-4 mt-md-0 mt-sm-5 mt-5">
                    <div class="d-flex align-items-center gap-4 ex-card" data-aos="fade-up">
                        <div class="d-flex align-items-center justify-content-center">
                            <h3 class="count">90</h3>
                            <h3>%</h3>
                        </div>
                        <div>
                            <h4>Creative Approach</h4>
                            <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-4 ex-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="d-flex align-items-center justify-content-center">
                            <h3 class="count">99</h3>
                            <h3>%</h3>
                        </div>
                        <div>
                            <h4>Guaranteed Success</h4>
                            <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-4 ex-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="d-flex align-items-center justify-content-center">
                            <h3 class="count">85</h3>
                            <h3>%</h3>
                        </div>
                        <div>
                            <h4>Brand Strategy</h4>
                            <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== End of 1.8. Experience section ====== -->

    <!-- ====== 1.4. logoipsum section ====== -->
    <section class="logoipsum pb-md-0 pb-sm-4 pb-3">
        <div class="container text-center gap-4 d-flex flex-column">
            <hr class="hr1">
            <h3 data-aos="zoom-in">OUR CLIENTS</h3>
            <div class="logoipsum-slider" data-aos="zoom-in">
                <figure><img src="assets/Images/about/logoipsum1.svg" alt="logoipsum"></figure>
                <figure><img src="assets/Images/about/logoipsum2.svg" alt="logoipsum"></figure>
                <figure><img src="assets/Images/about/logoipsum3.svg" alt="logoipsum"></figure>
                <figure><img src="assets/Images/about/logoipsum4.svg" alt="logoipsum"></figure>
                <figure><img src="assets/Images/about/logoipsum5.svg" alt="logoipsum"></figure>
                <figure><img src="assets/Images/about/logoipsum6.svg" alt="logoipsum"></figure>
            </div>
            <hr class="hr2">
        </div>
    </section>
    <!-- ====== End of 1.4. logoipsum section ====== -->

    <!-- ====== 1.9. How we work section ====== -->
    @include('sections.procesos')
    <!-- ====== End of 1.9. How we work section ====== -->

    <!-- ====== 1.11. team section ====== -->
    <section class="team">
        <div class="container">
            <div class="row text-md-start text-sm-center text-center" data-aos="fade-up">
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex gap-3 justify-content-md-start justify-content-sm-center justify-content-center align-items-center">
                        <hr class="team-hr1">
                        <h5>Our Team</h5>
                    </div>
                    <h2 class="h2_margin">Meet Our Team of Professionals.
                    </h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever.
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-md-0 mt-sm-4 mt-4 d-flex align-items-center justify-content-md-end justify-content-sm-center justify-content-center">
                    <a href="team.html" class="btn_hover2">all members</a>
                </div>
            </div>
            <div class="team-slider mt-5" data-aos="zoom-in">
                <div class="team-img">
                    <img src="assets/Images/slider/team-slider1.png" alt="Avatar">
                    <div class="overlay">
                        <div class="overlay_text">
                            <h3>Jane Doe</h3>
                            <h4>Designer</h4>
                            <div class="d-flex justify-content-center align-items-center gap-2">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-img">
                    <img src="assets/Images/slider/team-slider2.png" alt="Avatar">
                    <div class="overlay">
                        <div class="overlay_text">
                            <h3>Katti Pairi</h3>
                            <h4>seo expert</h4>
                            <div class="d-flex justify-content-center align-items-center gap-2">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-img">
                    <img src="assets/Images/slider/team-slider3.png" alt="Avatar">
                    <div class="overlay">
                        <div class="overlay_text">
                            <h3>Jonny Coll</h3>
                            <h4>Developer</h4>
                            <div class="d-flex justify-content-center align-items-center gap-2">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-img">
                    <img src="assets/Images/slider/team-slider4.png" alt="Avatar">
                    <div class="overlay">
                        <div class="overlay_text">
                            <h3>Anni Doe</h3>
                            <h4>Ui / Ux</h4>
                            <div class="d-flex justify-content-center align-items-center gap-2">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-img">
                    <img src="assets/Images/slider/team-slider1.png" alt="Avatar">
                    <div class="overlay">
                        <div class="overlay_text">
                            <h3>Jane Doe</h3>
                            <h4>Designer</h4>
                            <div class="d-flex justify-content-center align-items-center gap-2">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-img">
                    <img src="assets/Images/slider/team-slider2.png" alt="Avatar">
                    <div class="overlay">
                        <div class="overlay_text">
                            <h3>Katti Pairi</h3>
                            <h4>Seo expert</h4>
                            <div class="d-flex justify-content-center align-items-center gap-2">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-img">
                    <img src="assets/Images/slider/team-slider3.png" alt="Avatar">
                    <div class="overlay">
                        <div class="overlay_text">
                            <h3>Jonny Coll</h3>
                            <h4>Developer</h4>
                            <div class="d-flex justify-content-center align-items-center gap-2">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-img">
                    <img src="assets/Images/slider/team-slider4.png" alt="Avatar">
                    <div class="overlay">
                        <div class="overlay_text">
                            <h3>Anni Doe</h3>
                            <h4>Ui / Ux</h4>
                            <div class="d-flex justify-content-center align-items-center gap-2">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-img">
                    <img src="assets/Images/slider/team-slider1.png" alt="Avatar">
                    <div class="overlay">
                        <div class="overlay_text">
                            <h3>Jane Doe</h3>
                            <h4>Designer</h4>
                            <div class="d-flex justify-content-center align-items-center gap-2">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-img">
                    <img src="assets/Images/slider/team-slider2.png" alt="Avatar">
                    <div class="overlay">
                        <div class="overlay_text">
                            <h3>Katti Pairi</h3>
                            <h4>Seo expert</h4>
                            <div class="d-flex justify-content-center align-items-center gap-2">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-img">
                    <img src="assets/Images/slider/team-slider3.png" alt="Avatar">
                    <div class="overlay">
                        <div class="overlay_text">
                            <h3>Jonny Coll</h3>
                            <h4>Developer</h4>
                            <div class="d-flex justify-content-center align-items-center gap-2">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-img">
                    <img src="assets/Images/slider/team-slider4.png" alt="Avatar">
                    <div class="overlay">
                        <div class="overlay_text">
                            <h3>Anni Doe</h3>
                            <h4>Ui / Ux</h4>
                            <div class="d-flex justify-content-center align-items-center gap-2">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="team-btn">
            <div data-aos="zoom-in" class="container d-flex align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center justify-content-center text-center gap-4 flex-wrap">
                <h4>Ask A Question To Our Amazing Team, And Get, Response Quickly.
                </h4>
                <a href="contact.html" class="btn_hover2">Contact Now</a>
            </div>
        </div>
    </section>
    <!-- ====== End of 1.11. team section ====== -->

    <!-- ====== 1.13. FAQ section ====== -->
    <section class="faq position-relative">
        <span> </span>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-md-6 text-md-start text-sm-center text-center" data-aos="fade-up">
                    <div class="d-flex gap-3 justify-content-md-start justify-content-sm-center justify-content-center align-items-center">
                        <hr class="faq-hr1">
                        <h5>FAQ</h5>
                    </div>
                    <h2 class="h2_margin">Frequently Asked Questions</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever.
                    </p>
                </div>
                <div class="col-lg-6 col-md-6 mt-md-0 mt-sm-4 mt-4">
                    <div class="accordion d-flex flex-column gap-4" id="accordionExample" data-aos="fade-down">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          WHAT KIND OF DIGITAL SERVICES DO YOU
                          PROVIDE?
                          </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          WHAT IS YOUR PROCESS FOR WORKING
                          WITH CLIENTS?
                          </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          WHAT IS YOUR TIMELINE FOR COMPLETING
                          A PROJECT?
                          </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                          WHAT IF I'M NOT SATISFIED WITH THE
                          WORK?
                          </button>
                            </h2>
                            <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== End of 1.13. FAQ section ====== -->
@endsection