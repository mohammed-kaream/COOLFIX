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

                <!-- 🎯 التقفيل الديناميكي النظيف الخالي من الأخطاء لكروت التسعير الثلاثة -->
                @foreach($pricings as $pricing)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="single-pricing-card">
                            <!-- اسم الباقة الديناميكي -->
                            <h3>{{ $pricing->name }}</h3>

                            <!-- الوصف الصغير للباقة -->
                            <p>{{ $pricing->description }}</p>

                            <!-- السعر المالي والدورية مدموجين ديناميكياً بسلام -->
                            <h1>₪{{ $pricing->price }} <sub>{{ $pricing->billing_period }}</sub></h1>

                            <ul class="list-unstyled ps-0 list">
                                <!-- 🛠️ حلقة التكرار الداخلية الذكية لجلب الميزات التابعة لهذه الباقة بالظبط من قاعدة البيانات -->
                                @foreach($pricing->features as $feature)
                                    <li class="d-flex align-items-center">
                                        <i class="ti-check"></i>
                                        {{ $feature->feature_name }}
                                    </li>
                                @endforeach
                            </ul>

                            <!-- زر الحجز التفاعلي الموجه لصفحة الأباوت بسلام -->
                            <a href="{{ route('about') }}" class="cta">
                                <span>{{ $pricing->button_text }}</span>
                                <svg width="13px" height="10px" viewBox="0 0 13 10">
                                    <path d="M1,5 L11,5"></path>
                                    <polyline points="8 1 12 5 8 9"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div><!-- END COL -->
                @endforeach

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
