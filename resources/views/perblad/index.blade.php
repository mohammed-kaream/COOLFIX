@extends('perblad.layout')
@section('content')
    <!-- START HOME -->
    <section id="home" class="home_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="home_content">
                        <h1>Your fridge stops. We show up fast.</h1>
                        <p>COOLFIX repairs and maintains refrigerators, freezers and cooling systems across Gaza —
                            honest diagnostics, genuine parts, and a technician who actually picks up the phone.</p>
                    </div>
                    <div class="home_btn">
                        <a href="tel:+970598924040" class="cta"><span>Call 059 892 4040</span>
                            <svg width="13px" height="10px" viewBox="0 0 13 10">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </a>
                    </div>
                </div><!-- END COL-->
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="home_me_img">
                        <img src="{{ asset('webfront/images/brand/hero-illustration.svg') }}" class="img-fluid"
                            alt="Refrigeration technician repairing a fridge" />
                        <div class="home_ps">
                            <img src="{{ asset('webfront/images/icon/user2.svg') }}" alt="" />
                            <h2>1200+</h2>
                            <span>Happy customers</span>
                        </div>
                        <div class="home_ps2">
                            <img src="{{ asset('webfront/images/icon/file2.svg') }}" alt="" />
                            <h2>3000+</h2>
                            <span>Repairs completed</span>
                        </div>
                    </div>
                </div><!-- END COL-->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END  HOME -->
    </div>
    <!-- END  TOP HEADER CLASS -->

    <!-- START COUNTER -->
    <section class="count_area counter_feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-counter count_one">
                        <span class="ti-timer sc_one"></span>
                        <h2 class="counter-num">9</h2>
                        <p>Years in Business</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-counter count_two">
                        <span class="ti-medall-alt sc_two"></span>
                        <h2 class="counter-num">3000</h2>
                        <p>Repairs Completed</p>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-counter count_three">
                        <span class="ti-id-badge sc_three"></span>
                        <h2 class="counter-num">45</h2>
                        <p>Minutes Avg. Response</p>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-counter count_four">
                        <span class="ti-user sc_four"></span>
                        <h2 class="counter-num">1200</h2>
                        <p>Happy Customers</p>
                    </div>
                </div><!-- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END COUNTER -->

    <!-- START ABOUT US HOME ONE -->
    <section class="ab_one section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="ab_img">
                        <img src="{{ asset('webfront/images/brand/about-illustration.svg') }}" class="img-fluid"
                            alt="Technician inspecting a refrigerator">
                        <div class="wc_year">
                            <h3><span>9+</span> <br />Years Experience</h3>
                        </div>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="ab_content">
                        <h2>Local, licensed, and always reachable.</h2>
                        <p>COOLFIX is a Gaza-based refrigeration workshop run by Mohammed Kareem Kohail. We diagnose
                            the
                            real problem before we touch a screwdriver, and we explain the fix in plain language
                            before
                            we start.</p>
                    </div>
                    <div class="abmv">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                        <h4>Fast, honest diagnostics</h4>
                        <p>No guessing games — we tell you exactly what's wrong and what it costs before any work
                            begins.</p>
                    </div>
                    <div class="abmv">
                        <i class="fa-solid fa-shield-halved"></i>
                        <h4>Warranty on every repair</h4>
                        <p>Every job leaves our workshop backed by a written warranty on parts and labor.</p>
                    </div>
                    <div class="cta_two">
                        <a href="about.html" class="cta"><span>More About Us</span>
                            <svg width="13px" height="10px" viewBox="0 0 13 10">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </a>
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END ABOUT US HOME ONE -->

    <!-- START TOP PROMO FEATURES -->
    <section class="tp_feature section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h4>Why Book With Us</h4>
                <h1>Refrigeration you can rely on.</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s"
                    data-wow-offset="0">
                    <div class="single_tp">
                        <h3>Same-Day Service</h3>
                        <i class="fa-solid fa-truck-fast"></i>
                        <p>Call before 3pm and in most cases we're at your door the same day.</p>
                        <a href="services.html" class="cta"><span>Learn More</span>
                            <svg width="13px" height="10px" viewBox="0 0 13 10">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </a>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="single_tp st_one">
                        <h3>Certified Technicians</h3>
                        <i class="fa-solid fa-user-gear"></i>
                        <p>Trained on all major fridge and freezer brands sold in Gaza.</p>
                        <a href="about.html" class="cta"><span>Learn More</span>
                            <svg width="13px" height="10px" viewBox="0 0 13 10">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </a>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"
                    data-wow-offset="0">
                    <div class="single_tp st_two">
                        <h3>Genuine Spare Parts</h3>
                        <i class="fa-solid fa-gears"></i>
                        <p>We only fit original or manufacturer-approved compressors and parts.</p>
                        <a href="services.html" class="cta"><span>Learn More</span>
                            <svg width="13px" height="10px" viewBox="0 0 13 10">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </a>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s"
                    data-wow-offset="0">
                    <div class="single_tp st_three">
                        <h3>Upfront Pricing</h3>
                        <i class="fa-solid fa-tag"></i>
                        <p>A clear quote before we start — no surprise charges on the invoice.</p>
                        <a href="pricing.html" class="cta"><span>Learn More</span>
                            <svg width="13px" height="10px" viewBox="0 0 13 10">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </a>
                    </div>
                </div><!-- END COL -->
            </div><!-- END ROW -->
        </div><!-- END CONTAINER -->
    </section>
    <!-- END TOP PROMO FEATURES -->

    <!-- START SERVICES GRID-->
    <section class="topic_content_p2 section-padding">
        <div class="container">
            <div class="section-title">
                <h4>What We Fix</h4>
                <h1>Our Refrigeration Services</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single_tca sc_one">
                        <i class="fa-solid fa-kitchen-set fa-2x"></i>
                        <h2><a href="services.html">Refrigerator Repair</a></h2>
                        <span>Home &amp; kitchen units</span>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single_tca sc_two">
                        <i class="fa-solid fa-snowflake fa-2x"></i>
                        <h2><a href="services.html">Freezer Repair</a></h2>
                        <span>Chest &amp; upright freezers</span>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single_tca sc_three">
                        <i class="fa-solid fa-fire-flame-simple fa-2x"></i>
                        <h2><a href="services.html">Gas Refill (Freon)</a></h2>
                        <span>Leak testing included</span>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single_tca sc_four">
                        <i class="fa-solid fa-gear fa-2x"></i>
                        <h2><a href="services.html">Compressor Replacement</a></h2>
                        <span>All major brands</span>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single_tca sc_five">
                        <i class="fa-solid fa-plug-circle-bolt fa-2x"></i>
                        <h2><a href="services.html">Electrical &amp; Thermostat</a></h2>
                        <span>Wiring &amp; control boards</span>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single_tca sc_six">
                        <i class="fa-solid fa-shop fa-2x"></i>
                        <h2><a href="services.html">Commercial Cooling</a></h2>
                        <span>Shops, restaurants &amp; stores</span>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single_tca sc_seven">
                        <i class="fa-solid fa-icicles fa-2x"></i>
                        <h2><a href="services.html">Ice Maker Repair</a></h2>
                        <span>Built-in &amp; standalone</span>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single_tca sc_eight">
                        <i class="fa-solid fa-clipboard-check fa-2x"></i>
                        <h2><a href="services.html">Preventive Maintenance</a></h2>
                        <span>Seasonal check-ups</span>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-12 text-center">
                    <div class="cc_btn">
                        <a href="services.html" class="cta"><span>View All Services</span>
                            <svg width="13px" height="10px" viewBox="0 0 13 10">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </a>
                    </div>
                </div><!--END COL -->
            </div><!-- END ROW -->
        </div><!-- END CONTAINER -->
    </section>
    <!-- END SERVICES GRID -->

    <!-- START TESTIMONIALS-->
    <section class="testi_home_area section-padding">
        <div class="container">
            <div class="section-title">
                <h4>Testimonials</h4>
                <h1>What our customers say</h1>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="testimonial-slider" class="owl-carousel">
                        <div class="testimonial">
                            <div class="testi_pic_title">
                                <div class="pic">
                                    <img src="{{ asset('webfront/images/all-img/t1.png') }}" alt="">
                                </div>
                                <h4>Ahmad Al-Sayed</h4>
                                <small class="post">Rimal, Gaza</small>
                            </div>
                            <p>My fridge stopped cooling on a Friday and COOLFIX still came out. Fixed the compressor
                                the same evening and it's been running perfectly since.</p>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div><!-- END TESTIMONIAL -->
                        <div class="testimonial">
                            <div class="testi_pic_title">
                                <div class="pic">
                                    <img src="{{ asset('webfront/images/all-img/t2.png') }}" alt="">
                                </div>
                                <h4>Huda Nassar</h4>
                                <small class="post">Al-Nasr, Gaza</small>
                            </div>
                            <p>Clear price before they started, no hidden fees after. The technician also showed me
                                how
                                to keep the seals clean so it doesn't happen again.</p>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div><!-- END TESTIMONIAL -->
                        <div class="testimonial">
                            <div class="testi_pic_title">
                                <div class="pic">
                                    <img src="{{ asset('webfront/images/all-img/t3.png') }}" alt="">
                                </div>
                                <h4>Samir Barghouti</h4>
                                <small class="post">Shop owner, Omar Al-Mukhtar St.</small>
                            </div>
                            <p>We use COOLFIX for all the display fridges in our store. They know commercial units
                                well
                                and always work around our opening hours.</p>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div><!-- END TESTIMONIAL -->
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END TESTIMONIALS -->

    <!-- START CTA BANNER -->
    <section class="marketing_content_area section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h4>Need Help Today</h4>
                <h1>Fridge acting up? Don't let it spoil your food.</h1>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <p style="font-size:17px;margin-bottom:30px;">Call or WhatsApp us now at <strong>059 892
                            4040</strong> and we'll get a technician on the way. Based at the end of Omar Al-Mukhtar
                        Street, Gaza — serving the whole city.</p>
                    <a href="tel:+970598924040" class="cta"><span>Call 059 892 4040</span>
                        <svg width="13px" height="10px" viewBox="0 0 13 10">
                            <path d="M1,5 L11,5"></path>
                            <polyline points="8 1 12 5 8 9"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- END CTA BANNER -->


@endsection
