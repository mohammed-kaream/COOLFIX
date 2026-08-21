<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description"
        content="COOLFIX provides fast, reliable refrigerator, freezer and cooling repair and maintenance in Gaza. Call 059 892 4040.">
    <meta name="keywords"
        content="refrigerator repair, fridge repair, refrigeration maintenance, cooling technician, Gaza appliance repair, freezer repair, AC repair, COOLFIX">
    <meta name="author" content="COOLFIX">
    <!-- SITE TITLE -->
    <title>COOLFIX - Refrigerator & Cooling Repair in Gaza</title>
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="{{ asset('webfront/bootstrap/css/bootstrap.min.css') }}">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('webfront/webfonts/themify-icons.css') }}">
    <!-- All Min Css -->
    <link rel="stylesheet" href="{{ asset('webfront/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('webfront/css/fontawesome.min.css') }}">
    <!--- owl carousel Css-->
    <link rel="stylesheet" href="{{ asset('webfront/owlcarousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('webfront/owlcarousel/css/owl.theme.css') }}">
    <!-- MAGNIFIC CSS -->
    <link rel="stylesheet" href="{{ asset('webfront/css/magnific-popup.css') }}">
    <!--jquery-simple-mobilemenu Css-->
    <link rel="stylesheet" href="{{ asset('webfront/css/jquery-simple-mobilemenu.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('webfront/css/animate.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('webfront/css/style.css') }}">
    <link rel="icon" type="image/svg+xml" href="assets/images/brand/logo.svg">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>

    <!-- START PRELOADER -->
    <div class="preloaders">
        <span class="loader">Loading data...</span>
    </div>
    <!-- END PRELOADER -->

    <!-- START TOP HEADER CLASS -->
    <div class="top_header_banner">
        <!-- START LOGO WITH CONTACT -->
        <section class="logo-contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-top-contact">
                            <i class="ti-mobile"></i>
                            <h4><a href="tel:+970598924040">059 892 4040</a></h4>
                        </div>
                    </div><!--- END COL -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-top-contact">
                            <i class="ti-email"></i>
                            <h4><a href="mailto:mohammedkareem@gmail.com">mohammedkareem@gmail.com</a></h4>
                        </div>
                    </div><!--- END COL -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-top-contact">
                            <i class="ti-alarm-clock"></i>
                            <h4>Sat to Thu: 8am - 8pm</h4>
                        </div>
                    </div><!--- END COL -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="top_social_profile">
                            <ul>
                                <li><a href="https://www.facebook.com/profile.php?id=100010037628573&locale=ar_AR"
                                        class="top_f_facebook"><i class="fa-brands fa-facebook"></i></a>
                                </li>
                                <li><a href="https://wa.me/972598924040" class="top_f_twitter"><i
                                            class="fa-brands fa-whatsapp"></i></a>
                                </li>
                                <li><a href="https://www.instagram.com/abo______kareem/" class="top_f_instagram"><i
                                            class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li><a href="#" class="top_f_linkedin"><i class="fa-brands fa-tiktok"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div><!--- END COL -->
                </div><!--- END ROW -->
            </div><!--- END CONTAINER -->
        </section>
        <!-- END LOGO WITH CONTACT -->

        <!-- START NAVBAR -->
        <div id="navigation" class="navbar-light bg-faded site-navigation">
            <div class="container">
                <div class="row">
                    <div class="col-20 align-self-center">
                        <div class="site-logo">
                            <a href="index.html"><img src="{{ asset('webfront/images/brand/logo.svg') }}"
                                    alt="COOLFIX logo"></a>
                        </div>
                    </div><!--- END Col -->

                    <div class="col-60 d-flex">
                        <nav id="main-menu">
                            <ul>
                                <li><a href="{{ url('index') }}">Home</a></li>
                                <li><a href="{{ url('/about') }}">About Us</a></li>
                                <li><a href="{{ url('/services') }}">Services</a></li>
                                <li><a href="{{ url('/pricing') }}">Pricing</a></li>
                                <li><a href="{{ url('/faq') }}">FAQ</a></li>
                                <li><a href="{{ url('/contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                    </div><!--- END Col -->

                    <div class="col-30 d-none d-xl-block text-end align-self-center">
                        <div class="call_to_action">
                            <a class="btn_two" href="tel:+970598924040">Call Now <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div><!--- END SOCIAL PROFILE -->
                    </div><!--- END Col -->

                    <ul class="mobile_menu">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div><!--- END ROW -->
            </div><!--- END CONTAINER -->
        </div>
        <!-- END NAVBAR -->

        @yield('content')
        <!-- START FOOTER -->
        <div class="footer section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="single_footer">
                            <a href="index.html"><img src="{{ asset('webfront/images/brand/logo.svg') }}"
                                    alt="COOLFIX"></a>
                            <p>COOLFIX has been keeping homes and businesses in Gaza cool for years, with fast, honest
                                refrigerator and cooling repair you can trust.</p>
                        </div>
                        <div class="foot_social">
                            <ul>
                                <li><a href="https://www.facebook.com/profile.php?id=100010037628573&locale=ar_AR"
                                        class="top_f_facebook"><i class="fa-brands fa-facebook"></i></a>
                                </li>
                                <li><a href="https://wa.me" class="top_f_twitter"><i
                                            class="fa-brands fa-whatsapp"></i></a>
                                </li>
                                <li><a href="https://www.instagram.com/abo______kareem/" class="top_f_instagram"><i
                                            class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li><a href="#" class="top_f_linkedin"><i class="fa-brands fa-tiktok"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div><!--- END COL -->
                    <div class="col-lg-2 col-sm-6 col-xs-12">
                        <div class="single_footer">
                            <h4>Services</h4>
                            <ul>
                                <li><a href="{{ asset('/services') }}">Fridge Repair</a></li>
                                <li><a href="{{ asset('/services') }}">Freezer Repair</a></li>
                                <li><a href="{{ asset('/services') }}">Gas Refill (Freon)</a></li>
                                <li><a href="{{ asset('/services') }}">Compressor Replacement</a></li>
                                <li><a href="{{ asset('/services') }}">Preventive Maintenance</a></li>
                                <li><a href="{{ asset('/services') }}">Commercial Cooling</a></li>
                            </ul>
                        </div>
                    </div><!--- END COL -->
                    <div class="col-lg-2 col-sm-6 col-xs-12">
                        <div class="single_footer">
                            <h4>Company</h4>
                            <ul>
                                <li><a href="{{ url('index') }}">Home</a></li>
                                <li><a href="{{ url('/about') }}">About Us</a></li>
                                <li><a href="{{ url('/services') }}">Services</a></li>
                                <li><a href="{{ url('/pricing') }}">Pricing</a></li>
                                <li><a href="{{ url('/faq') }}">FAQ</a></li>
                                <li><a href="{{ url('/contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div><!--- END COL -->
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="single_footer">
                            <h4>Contact Info</h4>
                            <div class="sf_contact">
                                <span class="ti-mobile"></span>
                                <h3>Phone / WhatsApp</h3>
                                <p>059 892 4040</p>
                            </div>
                            <div class="sf_contact">
                                <span class="ti-email"></span>
                                <h3>Email Address</h3>
                                <p>mohammedkareem@gmail.com</p>
                            </div>
                            <div class="sf_contact">
                                <span class="ti-map"></span>
                                <h3>Workshop Address</h3>
                                <p>End of Omar Al-Mukhtar St., Gaza</p>
                            </div>
                        </div>
                    </div><!--- END COL -->
                    <div class="col-lg-2 col-sm-6 col-xs-12">
                        <div class="single_footer">
                            <h4>Working Hours</h4>
                            <ul>
                                <li>Sat - Thu: 8:00 AM - 8:00 PM</li>
                                <li>Friday: Emergency calls only</li>
                            </ul>
                            <div class="cta_two" style="margin-top:20px;">
                                <a href="tel:+970598924040" class="cta"><span>Call Now</span>
                                    <svg width="13px" height="10px" viewBox="0 0 13 10">
                                        <path d="M1,5 L11,5"></path>
                                        <polyline points="8 1 12 5 8 9"></polyline>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div><!--- END COL -->
                </div><!--- END ROW -->
                <div class="row fc">
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="footer_copyright">
                            <p>&copy; 2026 COOLFIX. All Rights Reserved. Mohammed Kareem Kohail — Gaza, Palestine.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="footer_menu">
                            <ul>
                                <li><a href="#">Terms of use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div><!-- END COL -->
                </div>
            </div><!--- END CONTAINER -->
        </div>
        <!-- END FOOTER -->

        <!-- Latest jQuery -->
        <script src="{{ asset('webfront/js/jquery-1.12.4.min.js') }}"></script>
        <!-- Latest compiled and minified Bootstrap -->
        <script src="{{ asset('webfront/bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- owl-carousel min js  -->
        <script src="{{ asset('webfront/owlcarousel/js/owl.carousel.min.js') }}"></script>
        <!-- jquery-simple-mobilemenu.min -->
        <script src="{{ asset('webfront/js/jquery-simple-mobilemenu.js') }}"></script>
        <!-- magnific-popup js -->
        <script src="{{ asset('webfront/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- jquery mixitup min js -->
        <script src="{{ asset('webfront/js/jquery.mixitup.js') }}"></script>
        <!-- GSAP AND LOCOMOTIV JS-->
        <script src="{{ asset('webfront/js/gsap.min.js') }}"></script>
        <script src="{{ asset('webfront/js/ScrollTrigger.min.js') }}"></script>
        <script src="{{ asset('webfront/js/lenis.js') }}"></script>
        <!-- scrolltopcontrol js -->
        <script src="{{ asset('webfront/js/scrolltopcontrol.js') }}"></script>
        <!-- jquery inview js -->
        <script src="{{ asset('webfront/js/jquery.inview.min.js') }}"></script>
        <!-- WOW - Reveal Animations When You Scroll -->
        <script src="{{ asset('webfront/js/wow.min.js') }}"></script>
        <!-- scripts js -->
        <script src="{{ asset('webfront/js/scripts.js') }}"></script>
</body>

</html>
