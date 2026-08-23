<?php

use App\Http\Controllers\CoolController;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Route;

Route::get('/', [CoolController::class, 'home'])->name('home');
Route::get('/index', [CoolController::class, 'home'])->name('index');
Route::get('/about', [CoolController::class, 'about'])->name('about');
Route::get('/services', [CoolController::class, 'services'])->name('services');
Route::get('/pricing', [CoolController::class, 'pricing'])->name('pricing');
Route::get('/faq', [CoolController::class, 'faq'])->name('faq');

Route::get('/contact', [CoolController::class, 'contact'])->name('contact');
Route::post('/contact', [CoolController::class, 'contact_data']);




// Route::get('/send-test-email', function () {
//     // Mail::to('ranemkaream11@gmail.com')->send(new WelcomeEmail());
//     Mail::to('alzymkhyl936@gmail.com')->send(new WelcomeEmail('mohammed kohail' ,'moh@gmail.com'));
//     Mail::to('reem_k.r@hotmail.com')->send(new WelcomeEmail('reem kohail' ,'reem_k.r@hotmail.com'));
//     return "Send successfully";
// });

// Route::get('/send-test-email', function () {

//     // إرسال رسالة نصية مباشرة وسريعة بدون كلاس وبدون فيو
//     Mail::raw('يا كبير الرسالة وصلت رسمياً ومية مية! 🎉', function ($message) {
//         $message->to('test@example.com')
//                 ->subject('تجرية الإرسال السريعة 🚀');
//     });

//     return "تم إطلاق الإيميل بنجاح! شيك على المايل ديف 🏁";
// });

