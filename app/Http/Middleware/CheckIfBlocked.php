<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckIfBlocked
{
    /**
     * دالة فحص وطرد الحساب المحظور وضخ الرسالة المطلوبة فوراً عند تسجيل الدخول 🔒🚫
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 🎯 الفحص الحاسم: إذا كان الحساب المحيط بالجلسة محظوراً بالـ Database الحين
        if (Auth::check() && Auth::user()->is_blocked) {

            // 1. فسخ وكسر جلسة دخول المستخدم فوراً ❌
            Auth::logout();

            // 2. إبطال مفعول التوكنز والبيانات القديمة للجلسة
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            // 3. 🛠️ التعديل الحاسم: طرده لصفحة الـ Login بالرسالة المخصصة التي طلبتها بالظبط 👇🎯
            return redirect()->route('login')->with('error', 'لقد تم حظر حسابك بقرار من الإدارة! انتظر الأدمن لما يفكه. 🚫');
        }

        return $next($request);
    }
}
