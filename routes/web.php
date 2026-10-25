<?php

use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\CoolController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\PostController;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// =========================================================================
// 1. المسارات العامة (مفتوحة للزوار والضيوف بشكل طبيعي)
// =========================================================================

Route::get('/index', [CoolController::class, 'home'])->name('index');
Route::get('/about', [CoolController::class, 'about'])->name('about');
Route::get('/services', [CoolController::class, 'services'])->name('services');
Route::get('/pricing', [CoolController::class, 'pricing'])->name('pricing');
Route::get('/faq', [MainPageController::class, 'faq'])->name('faq');

Route::get('/data', [CoolController::class, 'store'])->name('store');
Route::get('/upload-file', [CoolController::class, 'upload_file'])->name('upload-file');
Route::post('/upload-file', [CoolController::class, 'storeFile']);

// مسارات التواصل وإرسال الحقول
Route::get('/contact', [ContactMessageController::class, 'showForm'])->name('contact');
Route::post('/contact/submit', [ContactMessageController::class, 'handleSubmit'])->name('contact.submit');
Route::get('/contact/display', [ContactMessageController::class, 'showDisplay'])->name('contact.display');

Route::post('/faq/book', [ContactMessageController::class, 'bookFromFaq'])
    ->middleware('throttle:5,1')
    ->name('faq.book');

Route::post('/faq/ai-search', [PostController::class, 'faqAISearch'])
    ->middleware('throttle:10,1')
    ->name('faq.ai_search');

Route::prefix('posts')->name('posts.')->group(function () {
    Route::get('inform', [PostController::class, 'data'])->name('data');
    Route::delete('destroy/{id}', [PostController::class, 'destroy'])->name('destroy');
});

// مسارات التحقق من السن (تأكد أن الميدل وير is.adult يعمل بالشكل المطلوب)
Route::middleware('is.adult:123')->prefix('admin')->group(function () {
    Route::get('user', [CoolController::class, 'user'])->name('user');
    Route::get('post', [CoolController::class, 'post'])->name('post');
});


// =========================================================================
// 2. مسارات حزمة المصادقة (Laravel Breeze)
// =========================================================================
require __DIR__ . '/auth.php';


// =========================================================================
// 3. جدار الحماية السيادي (ممنوع الدخول إلا للحسابات المسجلة والـ Admin)
// =========================================================================
Route::middleware(['auth'])->group(function () {
    Route::get('/', [MainPageController::class, 'home'])->name('home');
    Route::get('/dashboard', [MainPageController::class, 'home'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// أدمن فقط
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/force-delete-user/{id}', [PostController::class, 'destroy'])->name('admin.user.force_delete');
    Route::get('/admin/toggle-user-role/{id}', [PostController::class, 'toggleRole'])->name('admin.user.toggle_role');
    Route::get('/admin/toggle-block-user/{id}', [PostController::class, 'toggleBlock'])->name('admin.user.toggle_block');
    Route::get('/admin/toggle-top-user/{id}', [PostController::class, 'toggleTop'])->name('admin.user.toggle_top');
    Route::get('/admin/impersonate-user/{id}', [PostController::class, 'impersonate'])->name('admin.user.impersonate');
    Route::get('/admin/leave-impersonation', [PostController::class, 'leaveImpersonate'])->name('admin.user.leave_impersonate');
});

Route::get('/lang/{locale}', function (string $locale) {
    abort_unless(in_array($locale, ['en', 'ar']), 404);
    session(['locale' => $locale]);
    return redirect()->back();
})->name('lang.switch');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [MainPageController::class, 'home'])->name('home');
    Route::get('/dashboard', [MainPageController::class, 'home'])->name('dashboard');
    // ...
});



































// use App\Http\Controllers\ContactMessageController;
// use App\Http\Controllers\CoolController;
// use App\Http\Controllers\MainPageController;
// use App\Http\Controllers\PostController;
// use App\Mail\WelcomeEmail;
// use Illuminate\Support\Facades\Mail;
// use App\Http\Controllers\ProfileController;
// use Illuminate\Support\Facades\Route;



// // Route::get('/', [CoolController::class, 'store'])->name('home');
// // Route::get('/', [MainPageController::class, 'home'])->name('home');

// Route::get('/index', [CoolController::class, 'home'])->name('index');

// Route::get('/about', [CoolController::class, 'about'])->name('about');
// Route::get('/services', [CoolController::class, 'services'])->name('services');

// Route::get('/pricing', [CoolController::class, 'pricing'])->name('pricing');
// Route::get('/faq', [MainPageController::class, 'faq'])->name('faq');

// Route::get('/data', [CoolController::class, 'store'])->name('store');

// Route::get('/upload-file', [CoolController::class, 'upload_file'])->name('upload-file');
// Route::post('/upload-file', [CoolController::class, 'storeFile']);


// // Route::get('/contact', [CoolController::class, 'contact']);
// // Route::post('/contact', [CoolController::class, 'contact_data'])->name('contact');


// // 1. مسار إظهار الصفحة الرسمية التي تحتوي على الحقول (جديد 👇)
// Route::get('/contact', [ContactMessageController::class, 'showForm'])->name('contact');

// // 2. مسار إرسال الفورم وترحيل البيانات إلى قاعدة البيانات (موجود مسبقاً)
// Route::post('/contact/submit', [ContactMessageController::class, 'handleSubmit'])->name('contact.submit');

// // 3. مسار عرض صفحة النجاح وعرض البيانات (موجود مسبقاً)
Route::get('/contact/display', [ContactMessageController::class, 'showDisplay'])->name('contact.display');



// Route::post('/faq/book', [ContactMessageController::class, 'bookFromFaq'])
//     ->middleware('throttle:5,1')
//     ->name('faq.book');



// Route::prefix('posts')->name('posts.')->group(function () {
//     Route::get('inform', [PostController::class, 'data'])->name('data');

//     // 🎯 التصحيح الجذري: فصل وتغيير مسار الحذف لـ destroy/{id} ليقرأ المعرّف الرقمي للمستخدم مباشرة 👇
//     Route::delete('destroy/{id}', [PostController::class, 'destroy'])->name('destroy');
// });
// // 🎯 مسار حذف خارجي مستقل تماماً بنظام الـ GET السريع لمنع تعليق وتداخل الفورمات القديمة غصباً عن السيرفر
// Route::get('/admin/force-delete-user/{id}', [PostController::class, 'destroy'])->name('admin.user.force_delete');
// // 🎯 مسار خارجي ومستقل بنظام الـ GET السريع لتبديل صلاحية العضو فوراً بضغطة زر واحدة 👇
// Route::get('/admin/toggle-user-role/{id}', [PostController::class, 'toggleRole'])->name('admin.user.toggle_role');


// // Route::get('inform', [PostController::class, 'data'])->name('data');
// // Route::delete('inform', [PostController::class, 'destroy'])->name('destroy');


// // Route::post('inform',[PostController::class, 'show_data']);


// Route::middleware('is.adult:123')->prefix('admin')->group(function () {
//     Route::get('user', [CoolController::class, 'user'])->name('user');
//     Route::get('post', [CoolController::class, 'post'])->name('post');
// });




// Route::get('/send-test-email', function () {
//     // Mail::to('ranemkaream11@gmail.com')->send(new WelcomeEmail());
//     // Mail::to('alzymkhyl936@gmail.com')->send(new WelcomeEmail('mohammed kohail' ,'moh@gmail.com'));
//     // Mail::to('ranemkaream11@gmial.com')->send(new WelcomeEmail('raneem kohail' ,'ranemkaream11@gmial.com'));
//     // Mail::to('reem.mohamed7001@gmail.com')->send(new WelcomeEmail('reem kohail' ,'reem.mohamed7001@gmail.com'));






//     // Mail::to('abdalhalimhemaid0@gmail.com')->send(new WelcomeEmail('Abdalhalim Hemaid' ,'abdalhalimhemaid0@gmail.com'));
//     // Mail::to('shdhaalmdhwn7@gmail.com')->send(new WelcomeEmail('Shatha Elmadhoun' ,'shdhaalmdhwn7@gmail.com'));
//     Mail::to('ashrfalsrsawy36@gmail.com')->send(new WelcomeEmail('ashrf', 'ashrfalsrsawy36@gamil.com'));
//     // Mail::to('wkwk00466@gmail.com')->send(new WelcomeEmail('waed' ,'wkwk00466@gmail.com'));
//     // Mail::to('ahmed72ayyad@gmail.com')->send(new WelcomeEmail('ahmed' ,'ahmed72ayyad@gmail.com'));
//     // Mail::to('saidmazen1972@gmail.com')->send(new WelcomeEmail('said' ,'saidmazen1972@gmail.com'));
//     // Mail::to('malqumbuz@gmail.com')->send(new WelcomeEmail('mohammed' ,'malqumbuz@gmail.com'));
//     Mail::to('alzymkhyl936@gmail.com')->send(new WelcomeEmail('mohammed kohail', 'moh@gmail.com'));

//     return "Send successfully";
// });

// // Route::get('/send-test-email', function () {

// //     // إرسال رسالة نصية مباشرة وسريعة بدون كلاس وبدون فيو
// //     Mail::raw('يا كبير الرسالة وصلت رسمياً ومية مية! 🎉', function ($message) {
// //         $message->to('test@example.com')
// //                 ->subject('تجرية الإرسال السريعة 🚀');
// //     });

// //     return "تم إطلاق الإيميل بنجاح! شيك على المايل ديف 🏁";
// // });

// // 🎯 مسار حذف حساب مستخدم أو مسؤول نهائياً من قاعدة البيانات (تأكد من وجوده بملفك) 👇




// // 1. مسارات المصادقة والاستعادة (خارج جدار الحماية لتسمح للضيوف بتسجيل الدخول وتغيير الباسورد)
// require __DIR__ . '/auth.php';

// // 2. جدار الحماية (يمنع أي شخص من الدخول إلا لو كان مسجل حساب ومسؤول Admin)
// Route::middleware(['auth', 'verified', 'admin'])->group(function () {

//     // الرابط الأساسي للموقع (محمي ويفتح صفحتك الفول ستاك فوراً عند كتابة 127.0.0.1)
//     Route::get('/', [MainPageController::class, 'home'])->name('home');

//     // مسار الداشبورد الافتراضي (يعرض نفس صفحتك الفول ستاك ليتوافق مع أزرار الحزمة)
//     Route::get('/dashboard', [MainPageController::class, 'home'])->name('dashboard');

//     // مسارات البروفايل للتحكم بالحساب
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


// // 🎯 مسار تبديل حالة الحظر للمستخدم (حظر / تفعيل) بضغطة زر واحدة بدون نت
// Route::get('/admin/toggle-block-user/{id}', [PostController::class, 'toggleBlock'])->name('admin.user.toggle_block');
// // 🎯 مسار سيادي لتبديل حالة الترقية والتميز للموظف (فني مميز / عادي) بضغطة زر واحدة 👇
// Route::get('/admin/toggle-top-user/{id}', [PostController::class, 'toggleTop'])->name('admin.user.toggle_top');


// // 🎯 1. مسار التفتيش السري: الدخول الفوري بهوية الموظف أو الفني عبر الـ ID
// Route::get('/admin/impersonate-user/{id}', [PostController::class, 'impersonate'])->name('admin.user.impersonate');

// // 🎯 2. مسار العودة الآمنة: الخروج من حساب الموظف والعودة لكرسي الرئيس محمد
// Route::get('/admin/leave-impersonation', [PostController::class, 'leaveImpersonate'])->name('admin.user.leave_impersonate');

// Route::post('/faq/ai-search', [PostController::class, 'faqAISearch'])
//     ->middleware('throttle:10,1')
//     ->name('faq.ai_search');
