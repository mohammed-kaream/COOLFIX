<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="{{ asset('deslogin/css/auth-pro.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" href="{{ asset('deslogin/image/favicon.png') }}">
    <title>Create Account - COOLFIX</title>

    <style>
        .laravel-error-message {
            color: #ef4444;
            font-size: 0.85rem;
            margin-top: 5px;
            margin-bottom: 10px;
            display: block;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="brand-panel">
            <div class="brand-logo"><img src="{{ asset('deslogin/image/image_4c8a122c.png') }}" alt="COOLFIX"></div>
            <div class="brand-illustration"><img src="{{ asset('deslogin/image/auth-illustration.svg') }}"
                    alt="COOLFIX refrigeration illustration"></div>
            <div class="brand-copy">
                <h1>Join thousands who trust COOLFIX with their cooling.</h1>
                <p>Create an account to book repairs faster, track technician visits, and keep a full history of every
                    service on your fridge or freezer.</p>
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
                    <h2 class="sin">Create your account</h2>
                    <p class="papr">Enter your information to create a new account</p>
                </div>

                <div class="form">
                    <!-- ربط مسار الإرسال بمسار حزمة Breeze وتفعيل الـ POST وطرق الحماية -->
                    <form class="f" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="lab-inp">

                            <!-- 1. حقل الاسم -->
                            <label for="name">Name</label>
                            <input class="input-name" type="text" name="name" id="name"
                                placeholder="Enter your name" value="{{ old('name') }}" required autofocus
                                autocomplete="name">
                            @error('name')
                                <span class="laravel-error-message"><i class="fa-solid fa-circle-exclamation"></i>
                                    {{ $message }}</span>
                            @enderror

                            <!-- 2. حقل رقم الهاتف (مربوط بمتغير السيرفر mobile) -->
                            <label for="mobile">Phone</label>
                            <input class="input-phone" type="text" name="mobile" id="mobile"
                                placeholder="Enter your phone" value="{{ old('mobile') }}" required>
                            @error('mobile')
                                <span class="laravel-error-message"><i class="fa-solid fa-circle-exclamation"></i>
                                    {{ $message }}</span>
                            @enderror

                            <!-- 3. حقل البريد الإلكتروني -->
                            <label for="email">Email</label>
                            <input class="input-email" type="email" name="email" id="email"
                                placeholder="Enter email" value="{{ old('email') }}" required autocomplete="username">
                            @error('email')
                                <span class="laravel-error-message"><i class="fa-solid fa-circle-exclamation"></i>
                                    {{ $message }}</span>
                            @enderror

                            <!-- 4. حقل كلمة المرور -->
                            <label for="password">Password</label>
                            <div class="field-relative">
                                <input class="input-passwordd" type="password" name="password" id="password"
                                    placeholder="Enter password" required autocomplete="new-password">
                                <div class="icon-eye-slashh">
                                    <i class="fa-solid fa-eye-slash"></i>
                                </div>
                                <div class="icon-eye-openn">
                                    <i class="fa-solid fa-eye"></i>
                                </div>
                            </div>
                            @error('password')
                                <span class="laravel-error-message"><i class="fa-solid fa-circle-exclamation"></i>
                                    {{ $message }}</span>
                            @enderror

                            <!-- 5. حقل تأكيد كلمة المرور -->
                            <label for="password_confirmation">Confirm Password</label>
                            <input class="input-password" type="password" name="password_confirmation"
                                id="password_confirmation" placeholder="Enter password" required
                                autocomplete="new-password">
                            @error('password_confirmation')
                                <span class="laravel-error-message"><i class="fa-solid fa-circle-exclamation"></i>
                                    {{ $message }}</span>
                            @enderror

                        </div>

                        <div class="btn-cr">
                            <button type="submit" class="btn">Create Account</button>
                            <div class="account">
                                <p>Already have an account?</p>
                                <!-- ربط زر العودة بصفحة تسجيل الدخول الجديدة -->
                                <a href="{{ route('login') }}">Sign In</a>
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
    <!-- ربط ملفات الجافا سكريبت الخاصة بالصفحة مع المجلد الذكي -->
    <script src="{{ asset('deslogin/js/signin.js') }}"></script>
</body>

</html>
