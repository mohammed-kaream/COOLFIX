@extends('perblad.layout')
@section('content')
    <!-- START SECTION TOP -->
    <section class="section-top">
        <div class="container">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                    <h1>Our Services</h1>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li> / Services</li>
                    </ul>
                </div><!-- //.HERO-TEXT -->
            </div><!--- END COL -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END SECTION TOP -->
    </div><!-- END  TOP HEADER CLASS -->

    <!--START SERVICES -->
    <div class="best-course section-padding">
        <div class="container">
            <div class="section-title">
                <h4>What We Repair</h4>
                <h1>Refrigeration &amp; Cooling Services</h1>
            </div>
            <div class="course-list row wow fadeIn">

                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="course-item d-flex">
                        <div class="course-inner">
                            <div class="course-img">
                                <div class="course-img-icon"><i class="fa-solid fa-kitchen-set fa-3x"></i></div>
                                <div class="course-price">From ₪80</div>
                            </div>
                            <div class="course-content">
                                <div class="ccategory">
                                    <a href="#">Home Appliances</a>
                                </div>
                                <h3><a href="#">Refrigerator Repair</a></h3>
                                <div class="crating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span>5.0 / 140 Reviews</span>
                                </div>
                                <div class="cmeta">
                                    <span><i class="fa-solid fa-stopwatch"></i> Same-day visit</span>
                                    <span class="cmtime"><i class="fa-solid fa-shield-halved"></i> 6-mo warranty</span>
                                </div>
                            </div>
                        </div>
                        <div class="course-hover align-self-center">
                            <h3><a href="#">Refrigerator Repair</a></h3>
                            <p>Diagnosis and repair for cooling failures, unusual noise, leaks, and doors that won't
                                seal properly.</p>
                            <a href="contact.html">Book This Service</a>
                        </div>
                    </div>
                </div><!--- END COL -->

                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="course-item d-flex">
                        <div class="course-inner">
                            <div class="course-img">
                                <div class="course-img-icon"><i class="fa-solid fa-snowflake fa-3x"></i></div>
                                <div class="course-price">From ₪90</div>
                            </div>
                            <div class="course-content">
                                <div class="ccategory">
                                    <a href="#">Home Appliances</a>
                                </div>
                                <h3><a href="#">Freezer Repair</a></h3>
                                <div class="crating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span>5.0 / 98 Reviews</span>
                                </div>
                                <div class="cmeta">
                                    <span><i class="fa-solid fa-stopwatch"></i> Same-day visit</span>
                                    <span class="cmtime"><i class="fa-solid fa-shield-halved"></i> 6-mo warranty</span>
                                </div>
                            </div>
                        </div>
                        <div class="course-hover align-self-center">
                            <h3><a href="#">Freezer Repair</a></h3>
                            <p>Chest and upright freezer repairs — frost build-up, weak freezing, and door seal
                                replacement.</p>
                            <a href="contact.html">Book This Service</a>
                        </div>
                    </div>
                </div><!--- END COL -->

                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="course-item d-flex">
                        <div class="course-inner">
                            <div class="course-img">
                                <div class="course-img-icon"><i class="fa-solid fa-fire-flame-simple fa-3x"></i></div>
                                <div class="course-price">From ₪120</div>
                            </div>
                            <div class="course-content">
                                <div class="ccategory">
                                    <a href="#">Gas &amp; Leaks</a>
                                </div>
                                <h3><a href="#">Gas Refill (Freon)</a></h3>
                                <div class="crating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span>5.0 / 76 Reviews</span>
                                </div>
                                <div class="cmeta">
                                    <span><i class="fa-solid fa-stopwatch"></i> 1-2 hours</span>
                                    <span class="cmtime"><i class="fa-solid fa-shield-halved"></i> Leak test
                                        incl.</span>
                                </div>
                            </div>
                        </div>
                        <div class="course-hover align-self-center">
                            <h3><a href="#">Gas Refill (Freon)</a></h3>
                            <p>Full leak detection, repair, and refrigerant gas refill to bring cooling back to full
                                strength.</p>
                            <a href="contact.html">Book This Service</a>
                        </div>
                    </div>
                </div><!--- END COL -->

                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="course-item d-flex">
                        <div class="course-inner">
                            <div class="course-img">
                                <div class="course-img-icon"><i class="fa-solid fa-gear fa-3x"></i></div>
                                <div class="course-price">From ₪250</div>
                            </div>
                            <div class="course-content">
                                <div class="ccategory">
                                    <a href="#">Major Repairs</a>
                                </div>
                                <h3><a href="#">Compressor Replacement</a></h3>
                                <div class="crating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span>5.0 / 62 Reviews</span>
                                </div>
                                <div class="cmeta">
                                    <span><i class="fa-solid fa-stopwatch"></i> 2-4 hours</span>
                                    <span class="cmtime"><i class="fa-solid fa-shield-halved"></i> 12-mo
                                        warranty</span>
                                </div>
                            </div>
                        </div>
                        <div class="course-hover align-self-center">
                            <h3><a href="#">Compressor Replacement</a></h3>
                            <p>Genuine replacement compressors fitted and tested for units that won't cool at all.</p>
                            <a href="contact.html">Book This Service</a>
                        </div>
                    </div>
                </div><!--- END COL -->

                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="course-item d-flex">
                        <div class="course-inner">
                            <div class="course-img">
                                <div class="course-img-icon"><i class="fa-solid fa-plug-circle-bolt fa-3x"></i></div>
                                <div class="course-price">From ₪70</div>
                            </div>
                            <div class="course-content">
                                <div class="ccategory">
                                    <a href="#">Electrical</a>
                                </div>
                                <h3><a href="#">Thermostat &amp; Wiring</a></h3>
                                <div class="crating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span>5.0 / 54 Reviews</span>
                                </div>
                                <div class="cmeta">
                                    <span><i class="fa-solid fa-stopwatch"></i> 1 hour</span>
                                    <span class="cmtime"><i class="fa-solid fa-shield-halved"></i> 6-mo
                                        warranty</span>
                                </div>
                            </div>
                        </div>
                        <div class="course-hover align-self-center">
                            <h3><a href="#">Thermostat &amp; Wiring</a></h3>
                            <p>Control board diagnostics, thermostat replacement, and electrical fault-finding.</p>
                            <a href="contact.html">Book This Service</a>
                        </div>
                    </div>
                </div><!--- END COL -->

                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="course-item d-flex">
                        <div class="course-inner">
                            <div class="course-img">
                                <div class="course-img-icon"><i class="fa-solid fa-shop fa-3x"></i></div>
                                <div class="course-price">Custom Quote</div>
                            </div>
                            <div class="course-content">
                                <div class="ccategory">
                                    <a href="#">Commercial</a>
                                </div>
                                <h3><a href="#">Commercial Cooling</a></h3>
                                <div class="crating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span>5.0 / 41 Reviews</span>
                                </div>
                                <div class="cmeta">
                                    <span><i class="fa-solid fa-stopwatch"></i> Scheduled visit</span>
                                    <span class="cmtime"><i class="fa-solid fa-shield-halved"></i> Service
                                        contract</span>
                                </div>
                            </div>
                        </div>
                        <div class="course-hover align-self-center">
                            <h3><a href="#">Commercial Cooling</a></h3>
                            <p>Display fridges, walk-in coolers, and cooling systems for shops, restaurants and clinics.
                            </p>
                            <a href="contact.html">Book This Service</a>
                        </div>
                    </div>
                </div><!--- END COL -->

                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="course-item d-flex">
                        <div class="course-inner">
                            <div class="course-img">
                                <div class="course-img-icon"><i class="fa-solid fa-icicles fa-3x"></i></div>
                                <div class="course-price">From ₪60</div>
                            </div>
                            <div class="course-content">
                                <div class="ccategory">
                                    <a href="#">Home Appliances</a>
                                </div>
                                <h3><a href="#">Ice Maker Repair</a></h3>
                                <div class="crating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span>5.0 / 33 Reviews</span>
                                </div>
                                <div class="cmeta">
                                    <span><i class="fa-solid fa-stopwatch"></i> 1 hour</span>
                                    <span class="cmtime"><i class="fa-solid fa-shield-halved"></i> 3-mo
                                        warranty</span>
                                </div>
                            </div>
                        </div>
                        <div class="course-hover align-self-center">
                            <h3><a href="#">Ice Maker Repair</a></h3>
                            <p>Built-in and standalone ice maker repairs — jams, leaks, and units that won't make ice.
                            </p>
                            <a href="contact.html">Book This Service</a>
                        </div>
                    </div>
                </div><!--- END COL -->

                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="course-item d-flex">
                        <div class="course-inner">
                            <div class="course-img">
                                <div class="course-img-icon"><i class="fa-solid fa-clipboard-check fa-3x"></i></div>
                                <div class="course-price">From ₪50</div>
                            </div>
                            <div class="course-content">
                                <div class="ccategory">
                                    <a href="#">Maintenance</a>
                                </div>
                                <h3><a href="#">Preventive Maintenance</a></h3>
                                <div class="crating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span>5.0 / 88 Reviews</span>
                                </div>
                                <div class="cmeta">
                                    <span><i class="fa-solid fa-stopwatch"></i> 30-45 min</span>
                                    <span class="cmtime"><i class="fa-solid fa-shield-halved"></i> Seasonal
                                        check-up</span>
                                </div>
                            </div>
                        </div>
                        <div class="course-hover align-self-center">
                            <h3><a href="#">Preventive Maintenance</a></h3>
                            <p>Coil cleaning, seal checks, and gas-pressure tests to catch problems before they become
                                breakdowns.</p>
                            <a href="contact.html">Book This Service</a>
                        </div>
                    </div>
                </div><!--- END COL -->

            </div><!-- END COURSE LIST -->
        </div><!--- END CONTAINER -->
    </div>
    <!--END SERVICES -->

    <!-- START CTA BANNER -->
    <section class="marketing_content_area section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h4>Not Sure What's Wrong</h4>
                <h1>Describe the problem, we'll tell you what it needs.</h1>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <p style="font-size:17px;margin-bottom:30px;">Call or WhatsApp <strong>0598 924 040</strong> and
                        describe the symptoms — noise, leaking, warm fridge, high bills. We'll tell you what it likely
                        needs before we ever visit.</p>
                    <a href="tel:+970598924040" class="cta"><span>Call Us Now</span>
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
