<?php

use App\Http\Controllers\CoolController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Route;

Route::get('/', [CoolController::class, 'store'])->name('home');
Route::get('/', [CoolController::class, 'home'])->name('home');
Route::get('/index', [CoolController::class, 'home'])->name('index');
Route::get('/about', [CoolController::class, 'about'])->name('about');
Route::get('/services', [CoolController::class, 'services'])->name('services');

Route::get('/pricing', [CoolController::class, 'pricing'])->name('pricing');
Route::get('/faq', [CoolController::class, 'faq'])->name('faq');

Route::get('/data', [CoolController::class, 'store'])->name('store');

Route::get('/upload-file', [CoolController::class, 'upload_file'])->name('upload-file');
Route::post('/upload-file', [CoolController::class, 'storeFile']);


Route::get('/contact', [CoolController::class, 'contact']);
Route::post('/contact', [CoolController::class, 'contact_data'])->name('contact');

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
