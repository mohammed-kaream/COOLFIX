<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{


    public function showForm()
    {
        return view('perblad.contact');
    }


    // 1. دالة استقبال البيانات وترحيلها إلى قاعدة البيانات فوراً
    public function handleSubmit(Request $request)
    {
        // التحقق من الحقول الخمسة لجدولك
        $validated = $request->validate([
            'name'     => 'required|string|max:30',
            'phone'    => 'required|string|min:9|max:20',
            'brand'    => 'required|string|max:100',
            'area'     => 'required|string|max:150',
            'describe' => 'nullable|string',
        ]);

        // ترحيل البيانات الفعلي وحفظها داخل الـ DB (شغلك في الباك)
        ContactMessage::create($validated);

        // التوجيه إلى مسار صفحة النجاح مع تمرير البيانات في الـ Session
        return redirect()->route('contact.display')->with('client_data', $validated);
    }

    // 2. دالة عرض صفحة النجاح المطابقة لصورتك تماماً
    public function showDisplay()
    {
        // حماية الصفحة من الدخول المباشر
        if (!session()->has('client_data')) {
            return redirect()->route('home');
        }

        // استدعاء الصفحة بالمسار الصحيح الظاهر في مجلداتك الحالية 👇
        return view('perblad.display');
    }
}
