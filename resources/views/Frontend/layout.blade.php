<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>TADBEER CSS PROGRAM</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="TADBEERCSS">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="description" content="Tadbeer CSS Program">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="{{asset('app/images/favicon.png')}}">
        <link rel="apple-touch-icon" href="{{asset('app/images/apple-touch-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('app/images/apple-touch-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('app/images/apple-touch-icon-114x114.png')}}">
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" type="text/css" href="{{asset('app/css/font-icons.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app/css/theme-vendors.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app/css/style.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('app/css/responsive.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('app/css/bootstrap.min.css')}}">
    </head>
    <body data-mobile-nav-style="classic">

        
        <!-- start header -->
        <header class="header-with-topbar">
            <div class="top-bar bg-light-gray border-bottom border-color-black-transparent d-none d-md-inline-block padding-35px-lr md-no-padding-lr">
                <div class="container-fluid nav-header-container">
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="col-12 text-center text-sm-start col-sm-auto me-auto ps-lg-0">
                            <ul class="social-icon padding-5px-tb">
                                <li><a class="text-neon-blue-hover" href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="text-neon-blue-hover" href="http://www.dribbble.com" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                                <li><a class="text-neon-blue-hover" href="http://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="text-neon-blue-hover" href="http://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-auto d-none d-sm-block text-end px-lg-0 font-size-0">
                            <div class="top-bar-contact">
                                <span class="top-bar-contact-list">
                                    <i class="feather icon-feather-phone-call icon-extra-small text-extra-dark-gray"></i>
                                   +92 3081312527
                                </span>
                                <span class="top-bar-contact-list d-none d-md-inline-block no-border-right pe-0">
                                    <i class="feather icon-feather-map-pin icon-extra-small text-extra-dark-gray"></i>
                                   Jammia Muhammdia F6/4, Islamabad
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <nav class="navbar navbar-expand-lg top-space navbar-light bg-white header-light fixed-top navbar-boxed header-reverse-scroll">
                <div class="container-fluid nav-header-container">
                    <div class="col-6 col-lg-2 me-auto ps-lg-0">
                        <a class="navbar-brand" href="#">
                            <h5>Tadbeer CSS Program</h5>
                            {{-- <img src="app/images/logo-gradient-sky-blue-pink.png" data-at2x="images/logo-gradient-sky-blue-pink@2x.png" class="default-logo" alt="">
                            <img src="app/images/logo-black.png" data-at2x="images/logo-black@2x.png" class="alt-logo" alt="">
                            <img src="app/images/logo-gradient-sky-blue-pink.png" data-at2x="images/logo-gradient-sky-blue-pink@2x.png" class="mobile-logo" alt=""> --}}
                        </a>
                    </div>
                    <div class="col-auto menu-order px-lg-0">
                        <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <div class=" collapse navbar-collapse justify-content-center" id="navbarNav">
                            <ul class="navbar-nav alt-font">
                                <li class="nav-item dropdown megamenu">
                                    <a href="{{url('/')}}" class="nav-link">Home</a> 
                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="#" class="nav-link">About</a>
                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="{{url('events-and-news')}}" class="nav-link">News & Events</a>
                                </li>
                                <li class="nav-item dropdown megamenu">
                                    <a href="javascript:void(0);" class="nav-link">Admission</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                    <div class="menu-back-div dropdown-menu megamenu-content" role="menu">
                                        <div class="d-lg-flex justify-content-center">
                                            <ul class="d-lg-inline-block">
                                                <li><a href="{{url('apply-online')}}">Online Apply</a></li>
                                                <li><a href="{{url('programs')}}">Programs</a></li>
                                                <li><a href="#">Counseling</a></li>
                                                <li><a href="{{url('merit-list')}}">Mertic List</a></li>

                                                {{-- <li class="nav-item dropdown megamenu">
                                                    <a href="javascript:void(0);" class="nav-link">Shop</a>
                                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                                    <div class="menu-back-div dropdown-menu megamenu-content" role="menu">
                                                        <div class="d-lg-flex justify-content-center">
                                                            <ul class="d-lg-inline-block md-margin-15px-bottom">
                                                                <li class="dropdown-header">Shop layout</li>
                                                                <li>
                                                                <li><a href="login-register.html">Login / Register</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li> --}}



                                            </ul>
                                            {{-- <ul class="d-lg-inline-block d-none small-gap">
                                                <li>
                                                    <a href="index.html" class="menu-banner-image"><img src="images/menu-banner-01.jpg" alt=""/></a>
                                                </li>
                                            </ul> --}}
                                            {{-- <ul class="d-lg-inline-block d-none no-padding-right">
                                                <li>
                                                    <a href="index.html" class="menu-banner-image"><img src="images/menu-banner-02.jpg" alt=""/></a>
                                                </li>
                                            </ul> --}}
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="{{url('contact-us')}}" class="nav-link">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{-- <div class="col-auto text-end pe-0 font-size-0">
                        <div class="header-search-icon search-form-wrapper">
                            <a href="javascript:void(0)" class="search-form-icon header-search-form"><i class="feather icon-feather-search"></i></a> --}}
                            <!-- start search input -->
                            {{-- <div class="form-wrapper">
                                <button title="Close" type="button" class="search-close alt-font">×</button>
                                <form id="search-form" role="search" method="get" class="search-form text-start" action="search-result.html">
                                    <div class="search-form-box">
                                        <span class="search-label alt-font text-small text-uppercase text-medium-gray">What are you looking for?</span>
                                        <input class="search-input alt-font" id="search-form-input5e219ef164995" placeholder="Enter your keywords..." name="s" value="" type="text" autocomplete="off">
                                        <button type="submit" class="search-button">
                                            <i class="feather icon-feather-search" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </form>
                            </div> --}}
                            <!-- end search input -->
                        {{-- </div>
                        <div class="header-language dropdown d-lg-inline-block">
                            <a href="javascript:void(0);"><i class="feather icon-feather-globe"></i></a>
                            <ul class="dropdown-menu alt-font">
                                <li><a href="javascript:void(0);" title="English"><span class="icon-country"><img src="images/country-flag-16X16/usa.png" alt=""></span>English</a></li>
                                <li><a href="javascript:void(0);" title="England"><span class="icon-country"><img src="images/country-flag-16X16/england.png" alt=""></span>England</a></li>
                                <li><a href="javascript:void(0);" title="France"><span class="icon-country"><img src="images/country-flag-16X16/france.png" alt=""></span>France</a></li>
                                <li><a href="javascript:void(0);" title="Russian"><span class="icon-country"><img src="images/country-flag-16X16/russian.png" alt=""></span>Russian</a></li>
                                <li><a href="javascript:void(0);" title="Spain"><span class="icon-country"><img src="images/country-flag-16X16/spain.png" alt=""></span>Spain</a></li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </nav>
        </header>
        <!-- end header -->





       








        @yield('content')





        
        
        <!-- start footer -->
        <footer class="footer-dark bg-slate-blue">
            <div class="footer-top padding-seven-tb lg-padding-eight-tb sm-padding-50px-tb">
                <div class="container">
                    <div class="row justify-content-center">
                        <!-- start footer column -->
                        <div class="col-12 col-lg-3 col-sm-6 order-5 order-lg-0 text-md-center text-lg-start last-paragraph-no-margin">
                            <a href="index.html" class="footer-logo margin-25px-bottom margin-5px-top d-inline-block"><img src="images/logo-gradient-sky-blue-pink-white.png" data-at2x="images/logo-gradient-sky-blue-pink-white@2x.png" alt=""></a>
                            <p>We create digital experiences for brands companies by using creativity.</p>
                            <p>&copy; Copyright 2021 <a href="index.html" class="text-decoration-line-bottom text-white">Litho</a></p>
                        </div>
                        <!-- end footer column -->
                        <!-- start footer column -->
                        <div class="col-12 col-lg-2 offset-xl-1 col-md-3 col-sm-4 order-1 order-lg-0 md-margin-40px-bottom xs-margin-25px-bottom">
                            <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Company</span>
                            <ul>
                                <li><a href="about-us.html">About company</a></li>
                                <li><a href="our-services.html">Our services</a></li>
                                <li><a href="contact-us-classic.html">Contact us</a></li>
                                <li><a href="about-me.html">About me</a></li>
                            </ul>
                        </div>
                        <!-- end footer column -->
                        <!-- start footer column -->
                        <div class="col-12 col-lg-2 col-md-3 col-sm-4 order-2 order-lg-0 md-margin-40px-bottom xs-margin-25px-bottom">
                            <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Resources</span>
                            <ul>                           
                                <li><a href="faq.html">Theme guide</a></li>
                                <li><a href="faq.html">Support desk</a></li>
                                <li><a href="what-we-offers.html">What we offer</a></li>
                                <li><a href="our-story.html">Company history</a></li>
                            </ul>
                        </div>
                        <!-- end footer column -->
                        <!-- start footer column -->
                        <div class="col-12 col-lg-2 col-md-3 col-sm-4 order-3 order-lg-0 md-margin-40px-bottom xs-margin-25px-bottom">
                            <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Additional</span>
                            <ul>
                                <li><a href="our-story.html">Our story</a></li>
                                <li><a href="who-we-are.html">Who we are</a></li>
                                <li><a href="our-process.html">Our process</a></li>
                                <li><a href="latest-news.html">Latest news</a></li>
                            </ul>
                        </div>
                        <!-- end footer column -->
                        <!-- start footer column -->
                        <div class="col-12 col-xl-2 col-lg-3 col-md-3 col-sm-6 order-4 order-lg-0 xs-margin-25px-bottom">
                            <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Services</span>
                            <ul>
                                <li><a href="our-services.html">Brand experience</a></li>
                                <li><a href="our-services.html">E-commerce website</a></li>
                                <li><a href="our-services.html">Content writing</a></li>
                                <li><a href="our-services.html">Marketing strategy</a></li>
                            </ul>
                        </div>
                        <!-- end footer column -->                        
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
        <!-- end scroll to top -->
        <!-- javascript -->
        <script type="text/javascript" src="{{asset('app/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('app/js/theme-vendors.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('app/js/main.js')}}"></script>

            <!-- Plugins JS File -->
        <script src="{{asset('app/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('app/js/jquery.hoverIntent.min.js')}}"></script>
        <script src="{{asset('app/js/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('app/js/superfish.min.js')}}"></script>
        <script src="{{asset('app/js/owl.carousel.min.js')}}"></script>
        <!-- Main JS File -->
        <script src="{{asset('app/js/main.js')}}"></script>
    </body>
</html>