<?php

use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\CoolController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\PostController;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



// Route::get('/', [CoolController::class, 'store'])->name('home');
// Route::get('/', [MainPageController::class, 'home'])->name('home');
Route::get('/index', [CoolController::class, 'home'])->name('index');

Route::get('/about', [CoolController::class, 'about'])->name('about');
Route::get('/services', [CoolController::class, 'services'])->name('services');

Route::get('/pricing', [CoolController::class, 'pricing'])->name('pricing');
Route::get('/faq', [MainPageController::class, 'faq'])->name('faq');

Route::get('/data', [CoolController::class, 'store'])->name('store');

Route::get('/upload-file', [CoolController::class, 'upload_file'])->name('upload-file');
Route::post('/upload-file', [CoolController::class, 'storeFile']);


// Route::get('/contact', [CoolController::class, 'contact']);
// Route::post('/contact', [CoolController::class, 'contact_data'])->name('contact');


// 1. مسار إظهار الصفحة الرسمية التي تحتوي على الحقول (جديد 👇)
Route::get('/contact', [ContactMessageController::class, 'showForm'])->name('contact');

// 2. مسار إرسال الفورم وترحيل البيانات إلى قاعدة البيانات (موجود مسبقاً)
Route::post('/contact/submit', [ContactMessageController::class, 'handleSubmit'])->name('contact.submit');

// 3. مسار عرض صفحة النجاح وعرض البيانات (موجود مسبقاً)
Route::get('/contact/display', [ContactMessageController::class, 'showDisplay'])->name('contact.display');




Route::prefix('posts')->name('posts.')->group(function () {
    Route::get('inform', [PostController::class, 'data'])->name('data');
    Route::delete('inform/{post}', [PostController::class, 'destroy'])->name('destroy'); // تأكد من الاسم هنا
});

// Route::get('inform', [PostController::class, 'data'])->name('data');
// Route::delete('inform', [PostController::class, 'destroy'])->name('destroy');


// Route::post('inform',[PostController::class, 'show_data']);


Route::middleware('is.adult:123')->prefix('admin')->group(function () {
    Route::get('user', [CoolController::class, 'user'])->name('user');
    Route::get('post', [CoolController::class, 'post'])->name('post');
});




Route::get('/send-test-email', function () {
    // Mail::to('ranemkaream11@gmail.com')->send(new WelcomeEmail());
    // Mail::to('alzymkhyl936@gmail.com')->send(new WelcomeEmail('mohammed kohail' ,'moh@gmail.com'));
    // Mail::to('ranemkaream11@gmial.com')->send(new WelcomeEmail('raneem kohail' ,'ranemkaream11@gmial.com'));
    // Mail::to('reem.mohamed7001@gmail.com')->send(new WelcomeEmail('reem kohail' ,'reem.mohamed7001@gmail.com'));






    // Mail::to('abdalhalimhemaid0@gmail.com')->send(new WelcomeEmail('Abdalhalim Hemaid' ,'abdalhalimhemaid0@gmail.com'));
    // Mail::to('shdhaalmdhwn7@gmail.com')->send(new WelcomeEmail('Shatha Elmadhoun' ,'shdhaalmdhwn7@gmail.com'));
    Mail::to('ashrfalsrsawy36@gmail.com')->send(new WelcomeEmail('ashrf', 'ashrfalsrsawy36@gamil.com'));
    // Mail::to('wkwk00466@gmail.com')->send(new WelcomeEmail('waed' ,'wkwk00466@gmail.com'));
    // Mail::to('ahmed72ayyad@gmail.com')->send(new WelcomeEmail('ahmed' ,'ahmed72ayyad@gmail.com'));
    // Mail::to('saidmazen1972@gmail.com')->send(new WelcomeEmail('said' ,'saidmazen1972@gmail.com'));
    // Mail::to('malqumbuz@gmail.com')->send(new WelcomeEmail('mohammed' ,'malqumbuz@gmail.com'));
    Mail::to('alzymkhyl936@gmail.com')->send(new WelcomeEmail('mohammed kohail', 'moh@gmail.com'));

    return "Send successfully";
});

// Route::get('/send-test-email', function () {

//     // إرسال رسالة نصية مباشرة وسريعة بدون كلاس وبدون فيو
//     Mail::raw('يا كبير الرسالة وصلت رسمياً ومية مية! 🎉', function ($message) {
//         $message->to('test@example.com')
//                 ->subject('تجرية الإرسال السريعة 🚀');
//     });

//     return "تم إطلاق الإيميل بنجاح! شيك على المايل ديف 🏁";
// });









// 1. مسارات المصادقة والاستعادة (خارج جدار الحماية لتسمح للضيوف بتسجيل الدخول وتغيير الباسورد)
require __DIR__ . '/auth.php';

// 2. جدار الحماية (يمنع أي شخص من الدخول إلا لو كان مسجل حساب ومسؤول Admin)
Route::middleware(['auth', 'verified', 'admin'])->group(function () {

    // الرابط الأساسي للموقع (محمي ويفتح صفحتك الفول ستاك فوراً عند كتابة 127.0.0.1)
    Route::get('/', [MainPageController::class, 'home'])->name('home');

    // مسار الداشبورد الافتراضي (يعرض نفس صفحتك الفول ستاك ليتوافق مع أزرار الحزمة)
    Route::get('/dashboard', [MainPageController::class, 'home'])->name('dashboard');

    // مسارات البروفايل للتحكم بالحساب
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
