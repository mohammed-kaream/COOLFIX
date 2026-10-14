<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="{{ asset('deslogin/css/auth-pro.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" href="{{ asset('deslogin/image/favicon.png') }}">
    <title>Sign In - COOLFIX</title>

    <style>
        .laravel-error-message {
            color: #ef4444;
            font-size: 0.85rem;
            margin-top: 5px;
            display: block;
            font-weight: 500;
        }
        .session-success-status {
            color: #22c55e;
            background-color: #f0fdf4;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 15px;
            font-size: 0.9rem;
            text-align: center;
        }
    </style>
</head>
<!-- START ULTRA PREMIUM TOAST FOR LOGIN PAGE -->
@if (session('error'))
<div id="custom-toast-notification" class="cyber-toast-wrapper" style="position: fixed; top: 30px; right: -450px; background: rgba(255, 255, 255, 0.98); backdrop-filter: blur(10px); border-radius: 16px; padding: 18px 25px; box-shadow: 0 20px 40px rgba(220, 38, 38, 0.15), 0 4px 12px rgba(0,0,0,0.05); display: flex; align-items: center; gap: 18px; z-index: 999999; transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55); min-width: 360px; overflow: hidden; border: 1px solid rgba(254, 226, 226, 0.8);">

    <!-- 1. دائرة إشارة التحذير (⚠️) النيونية النابضة والدوارة 🚀 -->
    <div class="cyber-icon-spin" style="width: 38px; height: 38px; background: linear-gradient(135deg, #ef4444, #b91c1c); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #ffffff; font-weight: 800; font-size: 1.2rem; box-shadow: 0 6px 20px rgba(239, 68, 68, 0.4); flex-shrink: 0; position: relative;">
        ⚠️
        <!-- حلقة التوهج النبضي الخارجي -->
        <span class="pulse-ring"></span>
    </div>

    <!-- 2. نصوص رسالة الحظر المطلوبة بالملي -->
    <div style="display: flex; flex-direction: column; text-align: right; direction: rtl; flex-grow: 1;">
        <span class="cyber-title-glow" style="font-weight: 800; font-size: 1rem; margin-bottom: 3px; letter-spacing: 0.5px;">تنبيه أمني صارم 🔒</span>
        <span id="toast-message-text" style="color: #334155; font-size: 0.9rem; font-weight: 600; line-height: 1.4;">{{ session('error') }}</span>
    </div>

    <!-- 3. شريط وقت الحياة التنازلي التفاعلي الممتد بالأسفل 👇🎯 -->
    <div class="toast-progress-bar"></div>
</div>

<!-- 🎨 كود الحركات التفاعلية والـ Keyframes العبقرية لإشعار الـ Login بقوة الـ !important -->
<style>
/* تدرج التوهج النيوني الأحمر على الحواف الجانبية */
.cyber-toast-wrapper::before {
    content: ''; position: absolute; top: 0; right: 0; width: 6px; height: 100%;
    background: linear-gradient(to bottom, #ef4444, #dc2626);
}

/* 🎯 وضعية الدخول الحركية المرنة لداخل الشاشة */
.cyber-toast-wrapper.show-toast-ultra {
    right: 30px !important;
    animation: shakeGlow 0.4s ease-in-out forwards;
}

/* 🔄 حركة دوران وحيوية الأيقونة عند الظهور */
.cyber-toast-wrapper.show-toast-ultra .cyber-icon-spin {
    animation: spinIcon 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275) 0.2s forwards;
}

/* ⏳ شريط التناقص والتقلص التفاعلي بالأسفل */
.toast-progress-bar {
    position: absolute; bottom: 0; left: 0; height: 4px; width: 100%;
    background: linear-gradient(to right, #ef4444, #f97316);
    transform-origin: left;
}
.cyber-toast-wrapper.show-toast-ultra .toast-progress-bar {
    animation: shrinkProgress 4s linear forwards; /* يتقلص على مدار 4 ثوانٍ بالظبط ليتناسب مع وقت قراءة الرسالة الطويلة */
}

/* 💥 كود الـ Keyframes للحركات والاهتزاز الضوئي النابض 👇 */
@keyframes spinIcon {
    0% { transform: scale(0) rotate(0deg); }
    100% { transform: scale(1) rotate(360deg); }
}

@keyframes shrinkProgress {
    0% { transform: scaleX(1); }
    100% { transform: scaleX(0); }
}

@keyframes shakeGlow {
    0% { transform: translateX(20px) scale(0.95); }
    50% { transform: translateX(-5px) scale(1.02); box-shadow: 0 25px 50px rgba(239, 68, 68, 0.3) !important; }
    100% { transform: translateX(0) scale(1); }
}

/* حلقة النبض الضوئي المشعة حول دائرة التحذير الحمراء */
.pulse-ring {
    position: absolute; top: 0; left: 0; width: 100%; height: 100%;
    border: 2px solid #ef4444; border-radius: 50%;
    animation: pulseGlow 1.8s infinite ease-in-out;
}
@keyframes pulseGlow {
    0% { transform: scale(1); opacity: 1; }
    100% { transform: scale(1.6); opacity: 0; }
}

/* تأثير نبض وتوهج النص العلوي */
.cyber-title-glow {
    background: linear-gradient(135deg, #dc2626, #f97316);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
</style>

<!-- 🎯 4. سكربت الـ Vanilla JS المطور للتحريك التلقائي والسحب بمرونة -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    var loginToast = document.getElementById('custom-toast-notification');

    if (loginToast) {
        // 1. دفع ودخول الإشعار بمرونة وتوهج من اليمين في أعلى الصفحة بعد 300 ملي ثانية
        setTimeout(function() {
            loginToast.classList.add('show-toast-ultra');
        }, 300);

        // 2. سحب وإخفاء الإشعار بنعومة فائقة فور انتهاء تقلص الشريط السفلي (بعد 4.3 ثانية)
        setTimeout(function() {
            loginToast.style.transform = "translateX(450px) scale(0.9)";
            loginToast.style.opacity = "0";
        }, 4300);

        // 3. مسح الكلاسات وتنظيف الـ DOM تماماً لتأمين عمليات الدخول التالية
        setTimeout(function() {
            loginToast.classList.remove('show-toast-ultra');
            loginToast.style.transform = "";
            loginToast.style.opacity = "";
        }, 4800);
    }
});
</script>
@endif
<!-- END ULTRA PREMIUM TOAST FOR LOGIN PAGE -->

<body>
    <div class="container swap-enter">

        <div class="brand-panel">
            <div class="brand-logo"><img src="{{ asset('deslogin/image/image_4c8a122c.png') }}" alt="COOLFIX"></div>
            <div class="brand-illustration"><img src="{{ asset('deslogin/image/auth-illustration.svg') }}" alt="COOLFIX refrigeration illustration"></div>
            <div class="brand-copy">
                <h1>Manage every repair job from one account.</h1>
                <p>Manage your COOLFIX orders and repairs in one place.</p>
                <div class="brand-trust">
                    <span><i class="fa-solid fa-shield-halved"></i> Certified Technicians</span>
                    <span><i class="fa-solid fa-bolt"></i> Same-Day Response</span>
                    <span><i class="fa-solid fa-check-circle"></i> Genuine Parts Only</span>
                </div>
            </div>
        </div>

        <div class="form-panel">
            <div class="hheroo">
                <img class="img w-40" src="{{ asset('deslogin/image/image_4c8a122c.png') }}" alt="">

                <div class="login">
                    <h2 class="sin">Welcome back</h2>
                    <p class="papr">Enter your email or phone and password to sign in</p>
                </div>

                <div class="form">
                    <!-- تفاصيل الـ Session المرجعة من النظام لحالة الحساب -->
                    @if (session('status'))
                        <div class="session-success-status">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- ربط الفورم بمسار تسجيل الدخول المعتمد ونوع POST -->
                    <form class="f" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="lab-inp">
                            <label for="email">Email</label>
                            <!-- حقل الإيميل مع حفظ الإدخال المكتوب سابقاً تلقائياً في حال الخطأ -->
                            <input class="input-email" type="text" name="email" id="email" placeholder="Enter email" value="{{ old('email') }}" required autofocus autocomplete="username">

                            <!-- إظهار رسائل خطأ التحقق من الإيميل -->
                            @error('email')
                                <span class="laravel-error-message"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</span>
                            @enderror

                            <div class="forget">
                                <label for="password">Password</label>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="swap-nav">Forgot Password?</a>
                                @endif
                            </div>

                            <div class="field-relative">
                                <!-- حقل كلمة المرور مع الربط البرمجي بالنظام -->
                                <input class="input-password" type="password" name="password" id="password" placeholder="Enter password" required autocomplete="current-password">
                                <div class="icon-eye-slash">
                                    <i class="fa-solid fa-eye-slash"></i>
                                </div>
                                <div class="icon-eye-open">
                                    <i class="fa-solid fa-eye"></i>
                                </div>
                            </div>

                            <!-- إظهار رسائل خطأ التحقق من كلمة المرور -->
                            @error('password')
                                <span class="laravel-error-message"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</span>
                            @enderror

                            <!-- تفعيل صندوق "تذكر كلمة المرور" لربطه بالجلسة -->
                            <div class="checkboox">
                                <input id="remember_me" type="checkbox" name="remember">
                                <label for="remember_me">Remember password</label>
                            </div>
                        </div>

                        <div class="btn-cr">
                            <button type="submit" class="btn">Sign In</button>
                            <div class="account">
                                <p>Don't have an account?</p>
                                <a href="{{ route('register') }}">Create Account</a>
                            </div>
                        </div>

                        <div class="divider">or continue with</div>
                        <div class="link">
                            <a class="face" href="">
                                <img src="{{ asset('deslogin/image/Group 3455.png') }}" alt="">
                                <span>Facebook</span>
                            </a>
                            <a class="goog" href="">
                                <img src="{{ asset('deslogin/image/search 1.png') }}" alt="">
                                <span>Google</span>
                            </a>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
    <script src="{{ asset('deslogin/js/script.js') }}"></script>
    <script src="{{ asset('deslogin/js/panel-swap.js') }}"></script>
</body>

</html>
