@extends('perblad.layout')
@section('content')
    <!-- START SECTION TOP -->
    <section class="section-top">
        <div class="container">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                    <h1>Pricing</h1>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li> / Pricing</li>
                    </ul>
                </div><!-- //.HERO-TEXT -->
            </div><!--- END COL -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END SECTION TOP -->
    </div><!-- END  TOP HEADER CLASS -->

    <!-- START Pricing -->
    <div class="pricing-area section-padding">
        <div class="container">
            <div class="section-title text-center" data-cue="slideInUp">
                <h4>Clear, Upfront Pricing</h4>
                <h1>Choose the Service Package You Need.</h1>
            </div>
            <div class="row justify-content-center" data-cues="fadeIn">
                <div class="col-lg-4 col-md-6">
                    <div class="single-pricing-card">
                        <h3>Basic Checkup</h3>
                        <p>A quick diagnostic visit for a single fridge or freezer that isn't cooling right.</p>
                        <h1>₪80 <sub>/ VISIT</sub></h1>
                        <ul class="list-unstyled ps-0 list">
                            <li class="d-flex align-items-center">
                                <i class="ti-check"></i>
                                Full diagnostic inspection
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="ti-check"></i>
                                Gas pressure &amp; leak check
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="ti-check"></i>
                                Door seal &amp; thermostat test
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="ti-check"></i>
                                Written quote for any repair
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="ti-check"></i>
                                Visit fee waived if you proceed
                            </li>
                        </ul>
                        <a href="contact.html" class="cta"><span>Book This Visit</span>
                            <svg width="13px" height="10px" viewBox="0 0 13 10">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-pricing-card">
                        <h3>Standard Repair</h3>
                        <p>Our most-booked package — covers the majority of fridge and freezer breakdowns.</p>
                        <h1>₪150 <sub>+ PARTS</sub></h1>
                        <ul class="list-unstyled ps-0 list">
                            <li class="d-flex align-items-center">
                                <i class="ti-check"></i>
                                Everything in Basic Checkup
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="ti-check"></i>
                                Gas refill (Freon) if needed
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="ti-check"></i>
                                Thermostat or control repair
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="ti-check"></i>
                                6-month parts &amp; labor warranty
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="ti-check"></i>
                                Same-day service, most areas
                            </li>
                        </ul>
                        <a href="contact.html" class="cta"><span>Book This Repair</span>
                            <svg width="13px" height="10px" viewBox="0 0 13 10">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-pricing-card">
                        <h3>Full Service Contract</h3>
                        <p>Ongoing coverage for homes or shops that want cooling problems caught before they start.</p>
                        <h1>₪250 <sub>/ YEAR</sub></h1>
                        <ul class="list-unstyled ps-0 list">
                            <li class="d-flex align-items-center">
                                <i class="ti-check"></i>
                                2 scheduled maintenance visits
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="ti-check"></i>
                                Priority same-day emergency calls
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="ti-check"></i>
                                12-month parts &amp; labor warranty
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="ti-check"></i>
                                Compressor replacement discount
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="ti-check"></i>
                                Covers up to 2 units
                            </li>
                        </ul>
                        <a href="contact.html" class="cta"><span>Get This Plan</span>
                            <svg width="13px" height="10px" viewBox="0 0 13 10">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center" style="margin-top:20px;">
                    <p style="font-size:15px;color:#555;">Prices shown are starting points for the most common jobs.
                        Compressor replacement, commercial units, and unusual cases are quoted after a free on-site
                        inspection. Call <strong>0598 924 040</strong> for an exact quote.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- END Pricing -->
@endsection
