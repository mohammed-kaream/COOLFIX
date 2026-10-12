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
