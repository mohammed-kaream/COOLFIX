@extends('perblad.layout')
@section('content')
    <!-- START SECTION TOP -->
    <section class="section-top">
        <div class="container">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                    <h1>About Us</h1>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li> / About</li>
                    </ul>
                </div><!-- //.HERO-TEXT -->
            </div><!--- END COL -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END SECTION TOP -->
    </div><!-- END  TOP HEADER CLASS -->

    <!-- START ABOUT US HOME ONE -->
    <section class="ab_one section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="ab_content">
                        <h2>A family workshop, built on trust.</h2>
                        <p>COOLFIX started as a one-man repair cart on Omar Al-Mukhtar Street and grew into a full
                            refrigeration workshop, without ever losing the habit of treating every customer's kitchen
                            like our own.</p>
                    </div>
                    <div class="abmv">
                        <img src="{{ asset('webfront/images/all-img/light.svg') }}" alt="" />
                        <h4>Straight answers, every visit</h4>
                        <p>We inspect first, explain second, and only start repairs once you've agreed to the price.</p>
                    </div>
                    <div class="abmv">
                        <img src="{{ asset('webfront/images/all-img/target.svg') }}" alt="" />
                        <h4>Built for Gaza's power realities</h4>
                        <p>Our technicians are experienced with the extra strain that power outages put on cooling
                            systems, and we fix accordingly.</p>
                    </div>
                    <div class="cta_two">
                        <a href="contact.html" class="cta"><span>Get In Touch</span>
                            <svg width="13px" height="10px" viewBox="0 0 13 10">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </a>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="ab_img">
                        <img src="{{ asset('webfront/images/brand/about-illustration.svg') }}" class="img-fluid"
                            alt="Technician servicing a refrigerator">
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END ABOUT US HOME ONE -->

    <!-- START WHY CHOOSE US-->
    <section class="marketing_content_area section-padding">
        <div class="container">
            <div class="section-title">
                <h4>Why Choose COOLFIX</h4>
                <h1>What sets our workshop apart.</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="single_feature_one">
                        <div class="sf_top">
                            <i class="fa-solid fa-truck-fast"></i>
                            <h2><a href="contact.html">Fast <br />Response</a></h2>
                        </div>
                        <p>Most calls within Gaza get a technician on site the same day, often within the hour.</p>
                        <a href="contact.html">Read More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="single_feature_one">
                        <div class="sf_top">
                            <i class="fa-solid fa-user-gear"></i>
                            <h2><a href="about.html">Skilled <br />Technicians</a></h2>
                        </div>
                        <p>Years of hands-on experience with residential and commercial cooling units of every brand.</p>
                        <a href="about.html">Read More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"
                    data-wow-offset="0">
                    <div class="single_feature_one">
                        <div class="sf_top">
                            <i class="fa-solid fa-gears"></i>
                            <h2><a href="services.html">Genuine <br />Parts</a></h2>
                        </div>
                        <p>Original or manufacturer-approved compressors, thermostats, and gas — never generic knock-offs.
                        </p>
                        <a href="services.html">Read More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s"
                    data-wow-offset="0">
                    <div class="single_feature_one">
                        <div class="sf_top">
                            <i class="fa-solid fa-tag"></i>
                            <h2><a href="pricing.html">Transparent <br />Pricing</a></h2>
                        </div>
                        <p>You get a clear quote before any work starts — the price you agree to is the price you pay.</p>
                        <a href="pricing.html">Read More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s"
                    data-wow-offset="0">
                    <div class="single_feature_one">
                        <div class="sf_top">
                            <i class="fa-solid fa-shield-halved"></i>
                            <h2><a href="pricing.html">Repair <br />Warranty</a></h2>
                        </div>
                        <p>Every completed job comes with a written warranty covering parts and labor.</p>
                        <a href="pricing.html">Read More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"
                    data-wow-offset="0">
                    <div class="single_feature_one">
                        <div class="sf_top">
                            <i class="fa-solid fa-headset"></i>
                            <h2><a href="contact.html">Always <br />Reachable</a></h2>
                        </div>
                        <p>Call or WhatsApp 0598 924 040 and speak directly with the person doing your repair.</p>
                        <a href="contact.html">Read More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div><!-- END COL -->
            </div><!-- END ROW -->
        </div><!-- END CONTAINER -->
    </section>
    <!-- END WHY CHOOSE US -->

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

    <!-- START TEAM (owner/technician) -->
    <section class="team_member section-padding">
        <div class="container">
            <div class="section-title">
                <h4>Meet The Technician</h4>
                <h1>The person who'll be at your door</h1>
            </div>
            <div class="row text-center justify-content-center">
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="our-team">
                        <div class="team_img">
                            <img src="{{ asset('webfront/images/team/1.jpg') }}" alt="Mohammed Kareem Kohail">
                            <ul class="social">
                                <li><a href="tel:+970598924040" class="top_f_facebook"><i
                                            class="fa-solid fa-phone"></i></a></li>
                                <li><a href="#" class="top_f_twitter"><i class="fa-brands fa-whatsapp"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Mohammed Kareem Kohail</h3>
                            <span class="post">Founder &amp; Lead Technician</span>
                            <div class="sth_det2">
                                <span class="ti-timer"> <u>9+ Years</u></span>
                                <span class="ti-user"> <u>3000+ Repairs</u></span>
                            </div>
                        </div>
                    </div>
                </div><!--- END COL -->
            </div><!-- END ROW -->
        </div><!-- END CONTAINER -->
    </section>
    <!-- END TEAM -->

    <!-- START CTA BANNER -->
    <section class="marketing_content_area section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h4>Have Questions</h4>
                <h1>See our full FAQ or just give us a call.</h1>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <a href="faq.html" class="cta"><span>Visit FAQ Page</span>
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
