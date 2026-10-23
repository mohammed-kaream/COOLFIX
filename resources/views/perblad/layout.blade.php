    <!DOCTYPE html>
    <html lang="en">

    <head dir="rtl">
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
        <title>@yield('title', 'COOLFIX Gaza')</title>
        <!-- Latest Bootstrap min CSS -->

        <!-- 🎯 سطر حقن أيقونة التبويب الملكية (Favicon) لـ COOLFIX بداخل الـ <head> 👇🔥 -->
        <!-- كود التبويب الحالي الخاص بك سليم، فقط تأكد من استبدال ملف الصورة بالنسخة المقصوصة بالأسفل -->
        <link rel="icon" type="image/png" href="{{ asset('webfront/images/all-img/image_48ee44cebd.png') }}">


        <link rel="stylesheet" href="{{ asset('webfront/bootstrap/css/bootstrap.min.css') }}">
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap"
            rel="stylesheet">
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
        <!-- owl carousel Css -->
        <link rel="stylesheet" href="{{ asset('webfront/owlcarousel/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('webfront/owlcarousel/css/owl.theme.css') }}">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

        <!-- 🚨 بار التفتيش السري السيادي: لا يظهر نهائياً إلا إذا كان الرئيس محمد يتقمص حساباً حالياً 👇🎯 -->
        @if (session()->has('impersonator_id'))
            <div class="super-admin-impersonate-bar"
                style="background: linear-gradient(90deg, #dc2626, #b91c1c); color: #ffffff; padding: 12px; text-align: center; font-weight: 800; font-size: 0.98rem; position: relative; z-index: 999999; display: flex; justify-content: center; align-items: center; gap: 20px; box-shadow: 0 4px 15px rgba(220, 38, 38, 0.3); direction: rtl;">
                <span>🕵️‍♂️ تنبيه سيادي: أنت تتصفح الموقع الحين وثائقياً بهوية الموظف: <b
                        style="color: #fef08a;">{{ auth()->user()->name }}</b></span>

                <!-- رابط المغادرة والعودة الفورية لحساب الأدمن الرئيسي محمد -->
                <a href="{{ route('admin.user.leave_impersonate') }}"
                    style="background: #ffffff; color: #b91c1c; padding: 6px 16px; border-radius: 20px; font-weight: 900; text-decoration: none; font-size: 0.88rem; box-shadow: 0 4px 10px rgba(0,0,0,0.1); transition: all 0.2s ease; display: inline-block;">
                    🔴 العودة لكرسي الرئيس
                </a>
            </div>
        @endif

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
                                    <li><a href="https://www.youtube.com/@Mohamed.123."
                                            class="fa-brands fa-youtube"><i></i></a>
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
                    <!-- الـ row هنا يجمع كل العناصر على سطر واحد باستخدام align-items-center -->
                    <div class="row align-items-center">

                        <!-- 1. الشعار (اللوجو) -->
                        <div class="col-xl-2 col-lg-2 col-6">
                            <div class="site-logo">
                                <a href="index.html">
                                    <img src="{{ asset('webfront/images/brand/logo.svg') }}" alt="COOLFIX logo">
                                </a>
                            </div>
                        </div><!--- END Col -->

                        <!-- 2. القائمة الرئيسية (تختفي في الشاشات الصغيرة وتظهر في الكبيرة) -->
                        <div class="col-xl-6 col-lg-5 d-none d-lg-block">
                            <nav id="main-menu">
                                <ul class="d-flex justify-content-center list-unstyled m-0 gap-1">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/about') }}">AboutUs</a></li>
                                    <li><a href="{{ url('/services') }}">Services</a></li>
                                    <li><a href="{{ url('/pricing') }}">Pricing</a></li>
                                    <li><a href="{{ url('/faq') }}">FAQ</a></li>
                                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                                    <li><a href="{{ url('/data') }}">Data</a></li>
                                    <li><a href="{{ url('/posts/inform') }}">information</a></li>
                                </ul>
                            </nav>
                        </div><!--- END Col -->

                        <!-- 3. قسم الأزرار (تظهر كلها بجانب بعضها على سطر واحد تماماً) -->
                        <div class="col-xl-4 col-lg-5 col-6 text-end">
                            <div class="d-flex align-items-center justify-content-end gap-2 navbar-buttons-wrapper">

                                <!-- زر تبديل النمط (Toggle Switch) -->
                                <label class="coolfix-theme-switch m-0" for="themeCheckbox">
                                    <div class="theme-toggle-switch" id="themeToggleSwitch" role="button"
                                        aria-label="Toggle dark mode">
                                        <div class="theme-toggle-knob" id="themeToggleKnob">☀️</div>
                                    </div>
                                </label>

                                <!-- زر اللغة البيضاوي -->
                                <button class="coolfix-lang-btn" id="langSwitcherBtn">
                                    English
                                </button>

                                <!-- زر الاتصال المستدير (Call Now) -->
                                <div class="call_to_action">
                                    <form method="POST" action="{{ route('logout') }}" id="logout-form">
                                        @csrf
                                        <a class="btn_two btn btn-primary" href="#"
                                            style="white-space: nowrap; border-radius: 50px;"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Log Out <i class="fa-solid fa-arrow-right ms-1"></i>
                                        </a>
                                    </form>
                                </div>
                                <button class="cfx-burger d-lg-none" id="cfxBurger" aria-label="Menu"
                                    aria-expanded="false" type="button">
                                    <span></span><span></span><span></span>
                                </button>
                            </div>
                        </div><!--- END Col -->

                    </div><!--- END ROW -->
                </div><!--- END CONTAINER -->
            </div>
            <div id="cfxMobileMenu" class="cfx-mobile-menu">
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/about') }}">AboutUs</a>
                <a href="{{ url('/services') }}">Services</a>
                <a href="{{ url('/pricing') }}">Pricing</a>
                <a href="{{ url('/faq') }}">FAQ</a>
                <a href="{{ url('/contact') }}">Contact</a>
                <a href="{{ url('/data') }}">Data</a>
                <a href="{{ url('/posts/inform') }}">information</a>
            </div>
            <!-- END NAVBAR -->


            <!-- كود الـ CSS المخصص لضبط الأزرار وحجمها على سطر واحد -->
            <style>
                :root {
                    --toggle-amber: #FEC961;
                    --toggle-teal: #013e37;
                    --toggle-teal-dark: #012722;
                }

                .theme-toggle-switch {
                    width: 52px;
                    height: 28px;
                    border-radius: 999px;
                    border: 1px solid rgba(1, 62, 55, 0.15);
                    background: var(--toggle-teal);
                    position: relative;
                    cursor: pointer;
                    display: flex;
                    align-items: center;
                    padding: 0 3px;
                    transition: background .3s ease;
                }

                .theme-toggle-knob {
                    width: 22px;
                    height: 22px;
                    border-radius: 50%;
                    background: var(--toggle-amber);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 12px;
                    transform: translateX(0);
                    transition: transform .3s cubic-bezier(.4, 0, .2, 1);
                }

                body.dark-mode .theme-toggle-knob {
                    transform: translateX(24px);
                }

                html[dir="rtl"] body.dark-mode .theme-toggle-knob {
                    transform: translateX(-24px);
                }

                /* عدّل هاي الأسطر حسب أسماء الكلاسات الموجودة بموقعك */
                body.dark-mode {
                    background: #0b1614 !important;
                    color: #1a8409 !important;
                }

                body.dark-mode h1,
                body.dark-mode h2,
                body.dark-mode h3,
                body.dark-mode h4,
                body.dark-mode h5,
                body.dark-mode p,
                body.dark-mode span,
                body.dark-mode li,
                body.dark-mode small,
                body.dark-mode a {
                    color: #1a572e;
                }

                body.dark-mode .theme-toggle-switch {
                    background: #20403a;
                }

                .sun-moon-icon {
                    position: absolute;
                    content: "";
                    height: 20px;
                    width: 20px;
                    left: 3px;
                    bottom: 3px;
                    background-color: #FFAE19;
                    border-radius: 50%;
                    transition: .3s;
                }

                /* الحركة عند تشغيل الزر */
                .coolfix-theme-switch input:checked+.theme-slider {
                    background-color: #1a1a1a;
                }

                .coolfix-theme-switch input:checked+.theme-slider .sun-moon-icon {
                    transform: translateX(24px);
                    background-color: #180303;
                }

                /* تنسيق زر اللغة البيضاوي المحاكي تماماً للصورة */
                .coolfix-lang-btn {
                    background-color: #ffffff;
                    color: #1A444E;
                    font-weight: 600;
                    font-size: 13px;
                    padding: 3px 14px;
                    border: 1px solid #E2E8F0;
                    border-radius: 20px;
                    cursor: pointer;
                    white-space: nowrap;
                    flex-shrink: 0;
                    transition: ease 0.3s all;
                }

                .coolfix-lang-btn:hover {
                    background-color: #013e37;
                    color: #fff;
                }

                #navigation {
                    position: relative;
                }

                .cfx-burger {
                    width: 42px;
                    height: 42px;
                    flex-shrink: 0;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    gap: 5px;
                    padding: 10px;
                    background: #fff;
                    border: 1px solid #E2E8F0;
                    border-radius: 12px;
                    cursor: pointer;
                }

                .cfx-burger span {
                    display: block;
                    height: 2.5px;
                    width: 100%;
                    background: #013e37;
                    border-radius: 2px;
                    transition: transform .25s, opacity .25s;
                }

                .cfx-burger.open span:nth-child(1) {
                    transform: translateY(7.5px) rotate(45deg);
                }

                .cfx-burger.open span:nth-child(2) {
                    opacity: 0;
                }

                .cfx-burger.open span:nth-child(3) {
                    transform: translateY(-7.5px) rotate(-45deg);
                }

                .cfx-mobile-menu {
                    display: none;
                    background: #fff;
                    padding: 8px 20px 16px;
                    box-shadow: 0 12px 24px rgba(0, 0, 0, .08);
                    border-top: 1px solid #eee;
                }

                .cfx-mobile-menu.open {
                    display: block;
                }

                .cfx-mobile-menu a {
                    display: block;
                    padding: 12px 0;
                    font-weight: 600;
                    color: #013e37;
                    border-bottom: 1px solid #f0f0f0;
                }

                .cfx-mobile-menu a:last-child {
                    border-bottom: 0;
                }

                @media (min-width: 992px) {

                    .cfx-mobile-menu,
                    .cfx-mobile-menu.open {
                        display: none !important;
                    }
                }

                @media (max-width: 575px) {
                    #navigation {
                        padding: 12px 0;
                    }

                    .navbar-buttons-wrapper {
                        gap: 6px !important;
                    }

                    .coolfix-lang-btn {
                        padding: 3px 10px;
                        font-size: 12px;
                    }

                    .site-logo {
                        width: 110px;
                    }
                }
            </style>

            @yield('content')
            <!-- START FOOTER -->
            <div class="footer section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-xs-12">
                            <div class="single_footer">
                                <a href="index.html"><img src="{{ asset('webfront/images/brand/logo.svg') }}"
                                        alt="COOLFIX"></a>
                                <p>COOLFIX has been keeping homes and businesses in Gaza cool for years, with fast,
                                    honest
                                    refrigerator and cooling repair you can trust.</p>
                            </div>
                            <div class="foot_social">
                                <ul>
                                    <li><a href="https://www.facebook.com/profile.php?id=100010037628573&locale=ar_AR"
                                            class="top_f_facebook"><i class="fa-brands fa-facebook"></i></a>
                                    </li>
                                    <li><a href="https://www.youtube.com/@Mohamed.123."
                                            class="fa-brands fa-youtube"><i></i></a>
                                    </li>

                                    <li><a href="https://wa.me" class="top_f_twitter"><i
                                                class="fa-brands fa-whatsapp"></i></a>
                                    </li>
                                    <li><a href="https://www.instagram.com/abo______kareem/"
                                            class="top_f_instagram"><i class="fa-brands fa-instagram"></i></a>
                                    </li>
                                    <li><a href="#" class="top_f_linkedin"><i
                                                class="fa-brands fa-tiktok"></i></a>
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
                                    <li><a href="{{ url('/data') }}">data</a></li>

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
                                <p>&copy; 2026 COOLFIX. All Rights Reserved. Mohammed Kareem Kohail — Gaza, Palestine.
                                </p>
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
            <script>
                (function() {
                    var themeSwitch = document.getElementById('themeToggleSwitch');
                    var themeKnob = document.getElementById('themeToggleKnob');

                    function applyTheme(theme) {
                        if (theme === 'dark') {
                            document.body.classList.add('dark-mode');
                            themeKnob.textContent = '🌙';
                        } else {
                            document.body.classList.remove('dark-mode');
                            themeKnob.textContent = '☀️';
                        }
                        localStorage.setItem('coolfix_theme', theme);
                    }

                    var savedTheme = localStorage.getItem('coolfix_theme') || 'light';
                    applyTheme(savedTheme);

                    themeSwitch.addEventListener('click', function() {
                        var current = document.body.classList.contains('dark-mode') ? 'dark' : 'light';
                        applyTheme(current === 'dark' ? 'light' : 'dark');
                    });
                })();
            </script>
            <script>
                (function() {
                    var burger = document.getElementById('cfxBurger');
                    var menu = document.getElementById('cfxMobileMenu');
                    if (!burger || !menu) return;

                    burger.addEventListener('click', function() {
                        var open = menu.classList.toggle('open');
                        burger.classList.toggle('open', open);
                        burger.setAttribute('aria-expanded', open);
                    });
                })();
            </script>
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
            <!-- استدعاء ملف الجافا سكريبت المحلي الخاص بمكتبة الـ Owl Carousel من مشروعك -->
            <script src="{{ asset('webfront/owlcarousel/js/owl.carousel.min.js') }}"></script>

            <!-- سكربت تفعيل حركة سلايدر فنيين الأباوت بالنقاط السفلية -->
            <script>
                $(document).ready(function() {
                    var teamSlider = $("#team-slider");

                    // تدمير النسخ القديمة المعلقة بالكاش لمنع تداخل الأكواد
                    if (teamSlider.hasClass('owl-loaded')) {
                        teamSlider.owlCarousel('destroy');
                    }

                    // تشغيل السلايدر بالبنية الجديدة ومزامنة النقاط الأربعة
                    teamSlider.owlCarousel({
                        items: 3, // عرض 3 كروت فنيين بجانب بعضهم
                        loop: true, // دوران مستمر للكروت بشكل دائري
                        margin: 20, // مسافة أمان جانبية بين الكروت
                        autoplay: true, // تحريك تلقائي للكروت
                        autoplayTimeout: 4000, // الانتقال كل 4 ثوانٍ تلقائياً
                        smartSpeed: 800, // نعومة دوران السلايدر
                        dots: true, // تفعيل وإظهار نقاط السكرول السفلية بنجاح 🟢
                        responsive: {
                            0: {
                                items: 1 // كرت واحد فقط على شاشات الجوال
                            },
                            768: {
                                items: 2 // كرتين على شاشات التابلت
                            },
                            1170: {
                                items: 3 // 3 كروت على شاشات الكمبيوتر تماماً كصورتك الأصلية
                            }
                        }
                    });
                });
            </script>

    </body>

    </html>
