<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>
    <link rel="shortcut icon" href="{{asset('assets/Images/fave_icon.png')}}" type="image/x-icon">
    <!-- Bootstrap5 -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-lib/bootstrap.min.css')}}">
    <!-- Font Awesome / Icon Fonts -->
    <link rel="stylesheet" href="{{asset('assets/font-awesome-lib/icon/font-awesome.min.css')}}">
    <!-- Style Theme -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Responsive Theme -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <!-- slider -->
    <link rel="stylesheet" href="{{asset('assets/css/slick.min.css')}}">
    <!-- animation -->
    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">
</head>

<body>
    <!-- site-wrapper -->
    <div class="site-wrapper">
        <div class="header-{{Route::is('inicio')?'index':''}}{{Route::is('nosotros')?'about':''}} ">
            <!-- ====== 1.1. Header section ====== -->
            <header>
                <nav class="container navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <!-- site logo -->
                        <a class="navbar-brand" href="index.html"><img src="assets/Images/logo.png" alt="logo"></a>
                        <button class="navbar-toggler" onclick="openNav()" type="button">
                     <span class="fa-solid fa-bars"></span>
                  </button>
                        <div class="collapse navbar-collapse">
                            <!-- menus -->
                            <ul class="navbar-nav me-auto gap-5">
                                <li class="nav-item"><a class="nav-link {{Route::is('inicio')?'active':''}}" href="{{route('inicio')}}">Inicio</a></li>
                                <li class="nav-item"><a class="nav-link {{Route::is('nosotros')?'active':''}}" href="{{route('nosotros')}}">Nosotros</a></li>
                                <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Pages
                           </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                        <li><a class="dropdown-item" href="services.html">Services</a></li>
                                        <li><a class="dropdown-item" href="pricing.html">Pricing Plan</a></li>
                                        <li><a class="dropdown-item" href="portfolio.html">Portfolio</a></li>
                                        <li><a class="dropdown-item" href="team.html">Team</a></li>
                                        <li><a class="dropdown-item" href="testimonials.html">Testimonials</a></li>
                                        <li><a class="dropdown-item" href="faq.html">FAQ</a></li>
                                        <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                                        <li><a class="dropdown-item" href="coming_soon.html">Coming Soon</a></li>
                                        <li><a class="dropdown-item" href="404.html">404</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="d-flex nav-right align-items-center gap-5">
                                <p>Call Us: <span>+123 456 7890</span></p>
                                <!-- header buttons -->
                                <i onclick="open_search_bar()" class="fa-solid fa-magnifying-glass"></i>
                                <i onclick="open_right_side()" class="fa-solid fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- Sidebar -->
                <aside id="mySidepanel" class="sidepanel">
                    <div class="sidebar">
                        <a class="p-0" href="index.html"><img src="assets/Images/logo.png" alt="logo"></a>
                        <button class="closebtn btn_hover1" onclick="closeNav()"><i class="fa-solid fa-xmark"></i></button>
                    </div>
                    <div>
                        <!-- side menus -->
                        <ul>
                            <li class="nav-item"><a class="nav-link {{Route::is('inicio')?'active':''}}" href="{{route('inicio')}}">Inicio</a></li>
                            <li class="nav-item"><a class="nav-link {{Route::is('nosotros')?'active':''}}" href="{{route('nosotros')}}">Nosotros</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                            <li class="pages"><a href="#">More</a></li>
                            <li class="collapse_btn nav-item">
                                <a class="nav-link plus_collapse" data-bs-toggle="collapse" href="#pages" role="button" aria-expanded="false" aria-controls="pages">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                                <div class="collapse" id="pages">
                                    <ul>
                                        <li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
                                        <li class="nav-item"><a class="nav-link" href="pricing.html">Pricing Plan</a></li>
                                        <li class="nav-item"><a class="nav-link" href="portfolio.html">Portfolio</a></li>
                                        <li class="nav-item"><a class="nav-link" href="team.html">Team</a></li>
                                        <li class="nav-item"><a class="nav-link" href="testimonials.html">Testimonials</a></li>
                                        <li class="nav-item"><a class="nav-link" href="faq.html">FAQ</a></li>
                                        <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                        <li class="nav-item"><a class="nav-link" href="coming_soon.html">Coming Soon</a></li>
                                        <li class="nav-item"><a class="nav-link" href="404.html">404</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </aside>
                <!-- searchbar -->
                <div class="d-flex flex-row-reverse" id="search-bar">
                    <div class="btn_hover1" onclick="close_search_bar()">X</div>
                    <form class="d-flex justify-content-between flex-md-row flex-sm-column flex-column gap-md-0 gap-sm-4 gap-4">
                        <input type="search" required placeholder="Search...">
                        <button type="submit" class="btn_hover1">Search</button>
                    </form>
                </div>
                <!-- Right Sidebar -->
                <section class="right-sidbar" id="right_side">
                    <div class="d-flex justify-content-between align-items-center">
                        <a class="p-0" href="index.html"><img src="assets/Images/right-side-logo.png" alt="logo"></a>
                        <button class="close_right_sidebar fa-solid fa-xmark" onclick="close_right_sade()"> </button>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <a href="about.html" class="btn_hover1">Discover More</a>
                    <hr>
                    <h4 class="mt-4">Connected details:</h4>
                    <ul class="d-flex flex-column gap-3">
                        <li>
                            <a href="#"> <i class="fa-solid fa-phone"></i></a>
                            <a href="#" class="text-lowercase">Yourname@Email.Com</a>
                        </li>
                        <li>
                            <a href="#"> <i class="fa-regular fa-envelope"></i></a>
                            <a href="#">+123-456-7890</a>
                        </li>
                        <li>
                            <a href="#"> <i class="fa-sharp fa-regular fa-clock"></i></a>
                            <a href="#">Office Hours: 8AM - 11PM Sunday -
                        Weekend Day</a>
                        </li>
                    </ul>
                    <span class="d-flex gap-4 mt-4">
                  <a href="#" class="p-0"><i class="fa-brands fa-facebook"></i></a>
                  <a href="#" class="p-0"><i class="fa-brands fa-instagram"></i></a>
                  <a href="#" class="p-0"><i class="fa-brands fa-twitter"></i></a>
                  <a href="#" class="p-0"><i class="fa-brands fa-linkedin"></i></a>
               </span>
                </section>

            </header>
            <!-- ====== End of 1.1. Header section ====== -->
            <!-- ====== 1.2. hero section ====== -->
            @yield('hero')
            <!-- ====== End of 1.2. hero section ====== -->
        </div>
        
        @yield('content')

        <!-- ====== 1.15. Footer section ====== -->
        <footer>
            <div class="container">
                <div class="footer-hr d-flex flex-column align-items-center text-center">
                    <div class="d-flex gap-2 align-items-center">
                        <hr>
                        <h6>Newsletter</h6>
                    </div>
                    <h3>JOIN OUR MAILING LIST</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever.
                    </p>
                </div>
                <form id="footer-form" class="d-flex justify-content-between flex-md-row flex-sm-column flex-column gap-md-0 gap-sm-4 gap-4">
                    <div id="footer-message"></div>
                    <input type="email" required placeholder="Enter your mail">
                    <button type="submit" class="btn_hover1">Get Started</button>
                </form>
            </div>
            <div class="footer-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 d-flex flex-column gap-4">
                            <a href="index.html"><img src="assets/Images/logo.png" alt="footer-logo"></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <span class="d-flex gap-4">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                     </span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-6 mt-md-0 mt-sm-4 mt-4">
                            <h4>Quick Links</h4>
                            <ul class="list-inline list-unstyled d-flex flex-column gap-4">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Blogs</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-6 d-flex align-items-end">
                            <ul class="d-flex flex-column gap-4">
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Privacy policy</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-4 mt-md-0 mt-sm-4 mt-4 d-flex flex-column align-items-md-start align-items-sm-center align-items-center">
                            <h4>Get Connected</h4>
                            <ul class="d-flex flex-column gap-4">
                                <li>
                                    <a href="#"> <i class="fa-solid fa-phone"></i></a>
                                    <a href="#" class="text-lowercase">Yourname@Email.Com</a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa-regular fa-envelope"></i></a>
                                    <a href="#">+123-456-7890</a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa-sharp fa-regular fa-clock"></i></a>
                                    <a href="#">Office Hours: 8AM - 11PM
                              Sunday - Weekend Day</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container d-flex justify-content-md-between justify-content-md-center justify-content-center gap-3 text-center flex-wrap">
                    <h6>Copyright © 2023 Digitly By <a href="https://themeforest.net/user/evonicmedia" class="p-0"> Evonicmedia. </a> All Rights Reserved.
                    </h6>
                    <h6>Powered By <b> Evonicsoft </b></h6>
                </div>
            </div>
        </footer>
        <!-- ====== End of 1.15. Footer section ====== -->
    </div>
    <!-- end site wrapper -->
    <!-- button back to top -->
    <button onclick="scrollToTop()" id="backToTopBtn" class="btn_hover2"><i
         class="fa-solid fa-arrow-turn-up"></i></button>

    <!-- j Query -->
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <!-- counter -->
    <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
    <!-- Bootstrap 5 -->
    <script src="{{asset('assets/js/javascript-lib/bootstrap.min.js')}}"></script>
    <!-- slider -->
    <script src="{{asset('assets/js/slick.min.js')}}"></script>
    <!-- style javascript -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <!-- animation -->
    <script src="{{asset('assets/js/aos.js')}}"></script>
    <script>
        AOS.init({
            once: true,
            duration: 1500,
        });
    </script>
</body>

</html>