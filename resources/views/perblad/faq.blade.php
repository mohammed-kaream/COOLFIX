@extends('perblad.layout')
@section('content')
    <!-- START SECTION TOP -->
    <section class="section-top">
        <div class="container">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                    <h1>Frequently Asked Questions</h1>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li> / FAQ</li>
                    </ul>
                </div><!-- //.HERO-TEXT -->
            </div><!--- END COL -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END SECTION TOP -->
    </div><!-- END  TOP HEADER CLASS -->

    <!-- START FAQ -->
    <section class="faq_area section-padding">
        <div class="container">
            <div class="section-title">
                <h4>Have Questions</h4>
                <h1>Everything You Need To Know</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="accordion" id="accordionExample">
                        @foreach ($aboutFaqs as $index => $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading_{{ $index }}">
                                    <!-- 🛠️ جعلنا الـ data-bs-target يقرأ الرقم التلقائي ليرتبط بالجواب الصحيح، وجعلنا الكلاس collapsed يختفي فقط في الكرت الأول 👇 -->
                                    <button class="accordion-button {{ $index == 0 ? '' : 'collapsed' }}" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse_{{ $index }}"
                                        aria-expanded="{{ $index == 0 ? 'true' : 'false' }}"
                                        aria-controls="collapse_{{ $index }}">
                                        <!-- طباعة نص السؤال ديناميكياً من قاعدة البيانات -->
                                        {{ $faq->question }}
                                    </button>
                                </h2>

                                <!-- 🛠️ هنا ربطنا الـ id بالـ index، وجعلنا الكرت الأول فقط يحمل كلاس show ليكون مفتوحاً عند تحميل الصفحة تلقائياً 👇 -->
                                <div id="collapse_{{ $index }}"
                                    class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                                    aria-labelledby="heading_{{ $index }}" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <!-- طباعة نص الجواب التفصيلي المنسدل من قاعدة البيانات -->
                                        {{ $faq->answer }}
                                    </div>
                                </div>
                            </div><!-- END ACCORDION ITEM -->
                        @endforeach

                    </div>
                </div><!-- END COL  -->
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="pt_faq">
                        <img src="{{ asset('webfront/images/brand/faq-illustration.svg') }}" class="img-fluid"
                            alt="Technician answering a question" />
                    </div>
                </div><!-- END COL  -->
            </div><!--END  ROW  -->
            <div class="row justify-content-center text-center" style="margin-top:40px;">
                <div class="col-lg-8">
                    <p style="font-size:16px;margin-bottom:20px;">Still have a question we didn't answer?</p>
                    <a href="tel:+970598924040" class="cta"><span>Call 0598 924 040</span>
                        <svg width="13px" height="10px" viewBox="0 0 13 10">
                            <path d="M1,5 L11,5"></path>
                            <polyline points="8 1 12 5 8 9"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </div><!--- END CONTAINER -->
    </section>
    <!-- END FAQ -->
@endsection
