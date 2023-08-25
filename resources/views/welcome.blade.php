@extends('layouts.cliente')

{{-- solo en el welcome enviar el hero, --}}
@section('hero')
<section class="hero">
    <div class="container position-relative" data-aos="zoom-in">
        <div>
            <div class="hero-social-icon align-items-center d-flex flex-md-column flex-sm-row flex-row justify-content-start">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <hr class="d-md-block d-sm-none d-none">
            </div>
            <div class="d-flex flex-column align-items-center gap-md-3 gap-sm-2 gap-2 text-center">
                <h1>SERVICIOS DIGITALES</h1>
                <h3>CONSTRUYE TU IMPERIO DIGITALMENTE</h3>
                <div class="d-flex gap-md-4 gap-sm-4 gap-3 mt-3">
                    <a href="services.html" class="btn_hover1">Get Started</a>
                    <a href="about.html" class="btn_hover2">Discover More</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection



@section('content')
    <!-- ====== 1.3. card section ====== -->
    <section class="feature position-relative">
        <div class="container">
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
                <div data-aos="fade-up" class="col-lg-3 col-md-6 mt">
                    <div>
                        <figure><img src="assets/Images/icon/feature3.png" alt="feature"></figure>
                        <h4>CREATIVE SOLUTION</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever.
                        </p>
                    </div>
                </div>
                <div data-aos="fade-down" class="col-lg-3 col-md-6 mt">
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
    <!-- ====== 1.4. logoipsum section ====== -->
    <section class="logoipsum">
        <div class="container text-center gap-4 d-flex flex-column">
            <hr class="hr1">
            <h3 data-aos="zoom-in">OUR CLIENTS</h3>
            <div class="logoipsum-slider" data-aos="zoom-in">
                <figure><img src="assets/Images/home/logoipsum1.svg" alt="logoipsum"></figure>
                <figure><img src="assets/Images/home/logoipsum2.svg" alt="logoipsum"></figure>
                <figure><img src="assets/Images/home/logoipsum3.svg" alt="logoipsum"></figure>
                <figure><img src="assets/Images/home/logoipsum4.svg" alt="logoipsum"></figure>
                <figure><img src="assets/Images/home/logoipsum5.svg" alt="logoipsum"></figure>
                <figure><img src="assets/Images/home/logoipsum6.svg" alt="logoipsum"></figure>
            </div>
            <hr class="hr2">
        </div>
    </section>
    <!-- ====== End of 1.4. logoipsum section ====== -->
    <!-- ====== 1.5. About us section ====== -->
    <section class="about">
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
                        <h5>Lorem Ipsum is simply dummy text of the printing.</h5>
                    </div>
                    <div class="d-flex gap-lg-4 gap-md-2 gap-sm-4 gap-2 mt-md-5 mt-sm-4 mt-4">
                        <a href="services.html" class="btn_hover1">Get Started</a>
                        <a href="about.html" class="btn_hover2">Discover More</a>
                    </div>
                </div>
                <div data-aos="fade-down" class="col-lg-6 col-md-6 mt-md-0 mt-sm-5 mt-5 position-relative d-flex justify-content-center align-items-center">
                    <div class="about-mask">
                        <figure>
                            <img src="assets/Images/home/about.png" alt="img">
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
    <!-- ====== End of 1.5. About us section ====== -->
    <!-- ====== 1.6. gallary section ====== -->
    <section class="portfolio">
        <div class="portfolio-1">
            <div class="container">
                <div class="row text-md-start text-sm-center text-center" data-aos="fade-up">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                        <div class="d-flex gap-3 justify-content-md-start justify-content-sm-center justify-content-center align-items-center">
                            <hr class="gallary-hr1">
                            <h5>PORTFOLIO</h5>
                        </div>
                        <h2 class="h2_margin">Our Latest Projects.</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-md-0 mt-sm-4 mt-4 d-flex align-items-center justify-content-md-end justify-content-sm-center justify-content-center">
                        <a href="portfolio.html" class="btn_hover2">View All Projects</a>
                    </div>
                    <hr class="mt-5">
                </div>
            </div>
        </div>
        <div class="gallary">
            <div class="ga-bg"> </div>
            <!-- overly -->
            <span> </span>
            <div class="container" data-aos="fade-up">
                <!-- Tab links -->
                <div class="tab mb-4">
                    <button class="tablinks active" onclick="open_img(event, 'all')">ALL</button>
                    <button class="tablinks" onclick="open_img(event, 'design')">DESIGN</button>
                    <button class="tablinks" onclick="open_img(event, 'development')">DEVELOPMENT</button>
                    <button class="tablinks" onclick="open_img(event, 'branding')">BRANDING</button>
                    <button class="tablinks" onclick="open_img(event, 'ui_ux')">UI/UX</button>
                    <button class="tablinks" onclick="open_img(event, 'markiting')">MARKETING</button>
                    <button class="tablinks" onclick="open_img(event, 'seo')">SEO</button>
                </div>
                <!-- Tab content -->
                <div id="all" class="tabcontent" style="display: block;">
                    <div class="d-flex justify-content-center">
                        <div class="row w-100">
                            <div class="col-md-4 p-0">
                                <figure><img src="assets/Images/home/all-gallary-1.png" alt="img"></figure>
                            </div>
                            <div class="col-md-4 p-0">
                                <figure><img src="assets/Images/home/all-gallary-2.png" alt="img"></figure>
                            </div>
                            <div class="col-md-4 p-0">
                                <figure><img src="assets/Images/home/all-gallary-3.png" alt="img"></figure>
                            </div>
                            <div class="col-md-8 p-0">
                                <figure><img src="assets/Images/home/all-gallary-4.png" alt="img"></figure>
                            </div>
                            <div class="col-md-4 p-0">
                                <figure><img src="assets/Images/home/all-gallary-5.png" alt="img"></figure>
                            </div>
                            <div class="col-md-4 p-0">
                                <figure><img src="assets/Images/home/all-gallary-6.png" alt="sm_img"></figure>
                                <figure><img src="assets/Images/home/all-gallary-7.png" alt="sm_img"></figure>
                            </div>
                            <div class="col-md-8 p-0">
                                <figure><img src="assets/Images/home/all-gallary-8.png" alt="img"></figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="design" class="tabcontent">
                    <div class="d-flex justify-content-center">
                        <div class="row w-100">
                            <div class="col-md-4 p-0">
                                <figure><img src="assets/Images/home/design-gallary-3.png" alt="img"></figure>
                            </div>
                            <div class="col-md-4 p-0">
                                <figure><img src="assets/Images/home/design-gallary-6.png" alt="img"></figure>
                            </div>
                            <div class="col-md-4 p-0">
                                <figure><img src="assets/Images/home/design-gallary-7.png" alt="img"></figure>
                            </div>
                            <div class="col-md-4 p-0">
                                <figure><img src="assets/Images/home/design-gallary-1.png" alt="img"></figure>
                            </div>
                            <div class="col-md-4 p-0">
                                <figure><img src="assets/Images/home/design-gallary-2.png" alt="img"></figure>
                            </div>
                            <div class="col-md-4 p-0">
                                <figure><img src="assets/Images/home/design-gallary-4.png" alt="img"></figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="development" class="tabcontent">
                    <div class="d-flex justify-content-center">
                        <div class="row w-100">
                            <div class="col-md-4 p-0">
                                <figure><img src="assets/Images/home/dev-gallary-3.png" alt="img"></figure>
                            </div>
                            <div class="col-md-4 p-0">
                                <figure><img src="assets/Images/home/dev-gallary-4.png" alt="img"></figure>
                            </div>
                            <div class="col-md-4 p-0">
                                <figure><img src="assets/Images/home/dev-gallary-5.png" alt="img"></figure>
                            </div>
                            <div class="col-md-4 p-0">
                                <figure><img src="assets/Images/home/dev-gallary-6.png" alt="img"></figure>
                            </div>
                            <div class="col-md-4 p-0">
                                <figure><img src="assets/Images/home/dev-gallary-7.png" alt="img"></figure>
                            </div>
                            <div class="col-md-4 p-0">
                                <figure><img src="assets/Images/home/dev-gallary-8.png" alt="img"></figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="branding" class="tabcontent">
                    <div class="d-flex justify-content-center">
                        <div class="row w-100">
                            <div class="col-md-4 p-0">
                                <figure><img src="assets/Images/home/brand-gallary-6.png" alt="img"></figure>
                            </div>
                            <div class="col-md-8 p-0">
                                <figure><img src="assets/Images/home/brand-gallary-8.png" alt="img"></figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ui_ux" class="tabcontent">
                    <div class="d-flex justify-content-center">
                        <div class="row w-100">
                            <div class="col-md-4 p-0">
                                <figure><img src="assets/Images/home/ui-ux-gallary-3.png" alt="img"></figure>
                            </div>
                            <div class="col-md-8 p-0">
                                <figure><img src="assets/Images/home/ui-ux-gallary-4.png" alt="img"></figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="markiting" class="tabcontent">
                    <div class="d-flex justify-content-center">
                        <div class="row w-100">
                            <div class="col-md-4 p-0">
                                <figure><img src="assets/Images/home/market-gallary-1.png" alt="img"></figure>
                            </div>
                            <div class="col-md-8 p-0">
                                <figure><img src="assets/Images/home/market-gallary-2.png" alt="img"></figure>
                            </div>
                            <div class="col-md-8 p-0">
                                <figure><img src="assets/Images/home/market-gallary-3.png" alt="img"></figure>
                            </div>
                            <div class="col-md-4 p-0">
                                <figure><img src="assets/Images/home/market-gallary-4.png" alt="img"></figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="seo" class="tabcontent">
                    <div class="d-flex justify-content-center">
                        <div class="row w-100">
                            <div class="col-md-4 p-0">
                                <figure><img src="assets/Images/home/seo-gallary-4.png" alt="img"></figure>
                            </div>
                            <div class="col-md-4 p-0">
                                <figure><img src="assets/Images/home/seo-gallary-5.png" alt="img"></figure>
                            </div>
                            <div class="col-md-4 p-0">
                                <figure><img src="assets/Images/home/seo-gallary-7.png" alt="img"></figure>
                            </div>
                            <div class="col-md-8 p-0">
                                <figure><img src="assets/Images/home/seo-gallary-6.png" alt="img"></figure>
                            </div>
                            <div class="col-md-4 p-0">
                                <figure><img src="assets/Images/home/seo-gallary-8.png" alt="img"></figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gallary-hr d-flex gap-3 justify-content-end align-items-center mt-4">
                    <h6>Creative Solution</h6>
                    <hr>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== End of 1.6. gallary section ====== -->
    <!-- ====== 1.7. Services section ====== -->
    <section class="service">
        <div class="service-1">
            <div class="container">
                <div class="row text-md-start text-sm-center text-center" data-aos="fade-down">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                        <div class="d-flex gap-3 justify-content-md-start justify-content-sm-center justify-content-center align-items-center">
                            <hr class="service-hr1">
                            <h5>SERVICES</h5>
                        </div>
                        <h2 class="h2_margin">Services We Offer</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-md-0 mt-sm-4 mt-4 d-flex align-items-center justify-content-md-end justify-content-sm-center justify-content-center">
                        <a href="services.html" class="btn_hover2">View All Services</a>
                    </div>
                    <hr class="mt-md-5 mt-sm-4 mt-4 mb-md-5 mb-sm-4 mb-4">
                </div>
                <div class="d-flex gap-4 flex-md-row flex-sm-column flex-column text-md-start text-sm-center text-center">
                    <div class="service-card" data-aos="fade-down">
                        <figure><img src="assets/Images/icon/slider1.png" alt="slider1"></figure>
                        <h3>UI/UX Design</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.
                        </p>
                        <a href="services.html" class="p-0">Read more <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <div class="service-card" data-aos="fade-up">
                        <figure><img src="assets/Images/icon/slider2.png" alt="slider2"></figure>
                        <h3>DEVELOPMENT</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.
                        </p>
                        <a href="services.html" class="p-0">Read more <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <div class="service-card" data-aos="fade-down">
                        <figure><img src="assets/Images/icon/slider3.png" alt="slider3"></figure>
                        <h3>Visual Design</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.
                        </p>
                        <a href="services.html" class="p-0">Read more <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== End of 1.7. Services section ====== -->
    <!-- ====== 1.8. Experience section ====== -->
    <section class="experience">
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
                        <figure><img src="assets/Images/home/experience.png" alt="img"></figure>
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
    <!-- ====== 1.9. How we work section ====== -->
    @include('sections.procesos')
    <!-- ====== End of 1.9. How we work section ====== -->
    <!-- ====== 1.10. Testimonials section ====== -->
    <section class="testimonial">
        <div class="container" data-aos="zoom-in">
            <div class="position-relative d-flex flex-column align-items-center">
                <div class="testimonial_hr d-flex gap-2 align-items-center">
                    <hr>
                    <h6>Testimonials</h6>
                </div>
                <h3>WHAT OUR CLIENT SAYS</h3>
            </div>
            <div class="testimonial_slider mt-3 ps-md-5 ms-sm-4 ps-1 pe-md-5 pe-sm-4 pe-1">
                <div class="text-center">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type.
                    </p>
                    <h5>Henry Koch</h5>
                    <h6>Brand Owner</h6>
                </div>
                <div class="text-center">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type.
                    </p>
                    <h5>Henry Koch</h5>
                    <h6>Brand Owner</h6>
                </div>
                <div class="text-center">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type.
                    </p>
                    <h5>Henry Koch</h5>
                    <h6>Brand Owner</h6>
                </div>
            </div>
            <div class="agency" data-aos="zoom-in">
                <hr class="agency-hr1">
                <div class="star-slider mt-5 d-flex flex-wrap">
                    <h3>Creative Agency </h3>
                    <i class="fa-solid fa-star"></i>
                    <h3>Digital Studio</h3>
                    <i class="fa-solid fa-star"></i>
                    <h3>Creative Agency </h3>
                    <i class="fa-solid fa-star"></i>
                    <h3>Digital Studio</h3>
                </div>
                <hr class="agency-hr2">
            </div>
        </div>
    </section>
    <!-- ====== End of 1.10. Testimonials section ====== -->
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
    <!-- ====== 1.12. Pricing section ====== -->
    <section class="pricing position-relative">
        <span> </span>
        <div class="pricing-hr d-flex align-items-center gap-2">
            <hr>
            <h6>Pricing Plans</h6>
        </div>
        <div class="container">
            <div class="text-center" data-aos="fade-down">
                <h5>PRICING</h5>
                <h2 class="h2_margin">Pricing Plans</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever.
                </p>
            </div>
            <div class="pricing-card d-flex gap-md-0 gap-sm-4 gap-4 flex-md-row flex-sm-column flex-column justify-content-center mt-5 text-center">
                <div data-aos="fade-up" class="d-flex flex-column align-items-center gap-4">
                    <h3>BASIC</h3>
                    <h2>$24</h2>
                    <h6>SEO Audits</h6>
                    <h6>SEO Managements</h6>
                    <h6>Digital Marketing</h6>
                    <h6>Site Managment</h6>
                    <a href="pricing.html" class="btn_hover1">Get Started</a>
                </div>
                <div class="d-flex flex-column align-items-center gap-4">
                    <h3>STANDARD</h3>
                    <h2>$594</h2>
                    <h6>SEO Audits</h6>
                    <h6>SEO Managements</h6>
                    <h6>Digital Marketing</h6>
                    <h6>Site Managment</h6>
                    <a href="pricing.html" class="btn_hover2">Get Started</a>
                </div>
                <div data-aos="fade-down" class="d-flex flex-column align-items-center gap-4">
                    <h3>PREMIUM</h3>
                    <h2>$99</h2>
                    <h6>SEO Audits</h6>
                    <h6>SEO Managements</h6>
                    <h6>Digital Marketing</h6>
                    <h6>Site Managment</h6>
                    <a href="pricing.html" class="btn_hover1">Get Started</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== End of 1.12. Pricing section ====== -->
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
    <!-- ====== 1.14. Blogs section ====== -->
    <section class="blog">
        <div class="container">
            <div class="row text-md-start text-sm-center text-center" data-aos="fade-down">
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex gap-3 justify-content-md-start justify-content-sm-center justify-content-center align-items-center">
                        <hr class="blog-hr1">
                        <h5>BLOGS</h5>
                    </div>
                    <h2 class="h2_margin">Latest Posts</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever.
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-md-0 mt-sm-4 mt-4 d-flex align-items-center justify-content-md-end justify-content-sm-center justify-content-center">
                    <a href="blog.html" class="btn_hover2">See all blogs</a>
                </div>
            </div>
            <div class="d-flex flex-md-row flex-sm-column flex-column align-items-center gap-md-0 gap-sm-4 gap-4 mt-5">
                <div data-aos="fade-up" class="blog-card w-100">
                    <img src="assets/Images/home/blog1.png" class="card-img-top" alt="img">
                    <div class="card-body">
                        <h4>10 Must-Know Digital Marketing Trends In 2023
                        </h4>
                        <a href="#">Learn More</a>
                    </div>
                </div>
                <div data-aos="fade-down" class="blog-card w-100">
                    <img src="assets/Images/home/blog2.png" class="card-img-top" alt="img">
                    <div class="card-body">
                        <h4>The Importance Of Responsive Web Design For Your Business
                        </h4>
                        <a href="#">Learn More</a>
                    </div>
                </div>
                <div data-aos="fade-up" class="blog-card w-100">
                    <img src="assets/Images/home/blog3.png" class="card-img-top" alt="img">
                    <div class="card-body">
                        <h4>How To Create A Successful Social Media Strategy
                        </h4>
                        <a href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== End of 1.14. Blogs section ====== -->
    
@endsection