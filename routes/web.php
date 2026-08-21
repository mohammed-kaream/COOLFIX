<?php

use App\Http\Controllers\CoolController;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Route;

// Route::get('/', [CoolController::class, 'home'])->name('home');
// Route::get('/index', [CoolController::class, 'home'])->name('index');
// Route::get('/about', [CoolController::class, 'about'])->name('about');
// Route::get('/services', [CoolController::class, 'services'])->name('services');
// Route::get('/pricing', [CoolController::class, 'pricing'])->name('pricing');
// Route::get('/faq', [CoolController::class, 'faq'])->name('faq');

// Route::get('/contact', [CoolController::class, 'contact'])->name('contact');
// Route::post('/contact', [CoolController::class, 'contact_data']);




Route::get('/send-test-email', function () {
    // أمر إرسال الإيميل
    Mail::to('test@example.com')->send(new WelcomeEmail());

    // الرسالة اللي رح تظهرلك على شاشة المتصفح
    return "تم إرسال الإيميل بنجاح! روح شيك على الـ Maildev 🚀";
});
