<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\CoolController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\PostController;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| 1. روابط مسارات موقع COOLFIX الديناميكية الحقيقية المسترجعة بالكامل 🚀
|--------------------------------------------------------------------------
*/

// مسار الصفحة الرئيسية للموقع (الهوم) ممرر لها الخدمات والعدادات
Route::get('/', [MainPageController::class, 'home'])->name('home');
Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/index', [CoolController::class, 'home'])->name('index');

// مسارات صفحات الموقع العام (من نحن والخدمات والتسعير والأسئلة)
Route::get('/about', [CoolController::class, 'about'])->name('about');
Route::get('/services', [CoolController::class, 'services'])->name('services');
Route::get('/pricing', [CoolController::class, 'pricing'])->name('pricing');
Route::get('/faq', [MainPageController::class, 'faq'])->name('faq');

Route::get('/data', [CoolController::class, 'store'])->name('store');

// مسارات رفع الملفات
Route::get('/upload-file', [CoolController::class, 'upload_file'])->name('upload-file');
Route::post('/upload-file', [CoolController::class, 'storeFile']);

// مسارات فورم صفحة اتصل بنا (Contact Message System)
Route::get('/contact', [ContactMessageController::class, 'showForm'])->name('contact');
Route::post('/contact/submit', [ContactMessageController::class, 'handleSubmit'])->name('contact.submit');
Route::get('/contact/display', [ContactMessageController::class, 'showDisplay'])->name('contact.display');

// مجموعة مسارات لوحة التحكم الخاصة بالمنشورات والـ Destory
Route::prefix('posts')->name('posts.')->group(function () {
    Route::get('inform', [PostController::class, 'data'])->name('data');
    Route::delete('inform/{post}', [PostController::class, 'destroy'])->name('destroy');
});

// مجموعة مسارات الإدارة المحمية بالـ Middleware الخاص بالسن الإجباري
Route::middleware('is.adult:123')->prefix('admin')->group(function () {
    Route::get('user', [CoolController::class, 'user'])->name('user');
    Route::get('post', [CoolController::class, 'post'])->name('post');
});

// مسار تجربة وإطلاق إيميلات الترحيب الجماعية
Route::get('/send-test-email', function () {
    Mail::to('ashrfalsrsawy36@gmail.com')->send(new WelcomeEmail('ashrf', 'ashrfalsrsawy36@gamil.com'));
    Mail::to('alzymkhyl936@gmail.com')->send(new WelcomeEmail('mohammed kohail', 'moh@gmail.com'));

    return "Send successfully";
});


/*
|--------------------------------------------------------------------------
| 2. روابط مسارات حزمة Laravel Breeze الجديدة والـ Dashboard 🔒
|--------------------------------------------------------------------------
*/

// مسار لوحة التحكم بعد تسجيل الدخول الموفر تلقائياً من Breeze
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// مجموعة مسارات حماية وتحديث ملف الحساب الشخصي (Profile) لبريز
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// استدعاء ملف مسارات المصادقة التلقائي لـ Breeze (Login, Register)
require __DIR__ . '/auth.php';
