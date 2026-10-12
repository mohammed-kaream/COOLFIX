@extends('perblad.layout')
@section('content')
    <!-- START SECTION TOP -->
    <section class="section-top">
        <div class="container">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                    <h1>Get In Touch</h1>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li> / Contact</li>
                    </ul>
                </div><!-- //.HERO-TEXT -->
            </div><!--- END COL -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END SECTION TOP -->
    </div><!-- END  TOP HEADER CLASS -->

    <!-- START ADDRESS -->
    <section class="address_area  section-padding">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="single_address">
                        <i class="ti-map"></i>
                        <h4>Our Workshop</h4>
                        <p>End of Omar Al-Mukhtar St. <br /> Gaza, Palestine</p>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="single_address">
                        <i class="ti-mobile"></i>
                        <h4>Call / WhatsApp</h4>
                        <p>059 892 4040</p>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"
                    data-wow-offset="0">
                    <div class="single_address">
                        <i class="ti-email"></i>
                        <h4>Send Email</h4>
                        <p>mohammedkareem@gmail.com</p>
                    </div>
                </div><!-- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END ADDRESS -->

    <!-- CONTACT -->
    <div id="contact" class="contact_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="section-title-two">
                        <h2>Tell us what's wrong with your fridge.</h2>
                    </div>
                    <div class="contact">
                        <form class="form" name="enq" method="POST" action="{{ route('contact.submit') }}"
                            onsubmit="return validation();">
                            <div class="row">
                                <x-input type="text" name="name" placeholder="Enter your name" />
                                <x-input type="tel" name="phone" placeholder="WhatsApp / Phone Number" />
                                <x-input type="text" name="brand" placeholder="Fridge Brand (e.g., LG, Samsung)" />
                                <x-input type="text" name="area" placeholder="Area / Neighborhood in Gaza" />

                                <x-textarea name="textarea"
                                    placeholder="Describe the problem (noise, leaking, not cooling, etc.) and your address in Gaza" />

                                <div class="col-md-12 text-center">
                                    <button type="submit" href="" class="cta"><span>Send Message</span>
                                        <svg width="13px" height="10px" viewBox="0 0 13 10">
                                            <path d="M1,5 L11,5"></path>
                                            <polyline points="8 1 12 5 8 9"></polyline>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- END COL  -->
                <div class="col-lg-5 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224.51716525208354!2d34.465919156705155!3d31.501939263714885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14fd7f6bca9b6f59%3A0x4e397a20bd24db29!2z2LPZhNi32Ycg2KfZhNmG2YLYrw!5e1!3m2!1sar!2s!4v1787257420448!5m2!1sar!2s"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="strict-origin-when-cross-origin"></iframe>
                    </div>
                </div><!-- END COL  -->
            </div><!-- END ROW -->
        </div><!--- END CONTAINER -->
    </div>
    <!-- END CONTACT -->
@endsection
