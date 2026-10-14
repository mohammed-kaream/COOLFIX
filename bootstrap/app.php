<?php

use App\Http\Middleware\CheckAdmin;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {

        // 🎯 1. حقن وتعميم حارس الحظر تلقائياً على كافة روابط الويب الحية لطرده فوراً 👇🚀
        $middleware->web(append: [
            \App\Http\Middleware\CheckIfBlocked::class,
        ]);

        // 2. الـ alias القديمة تبعتك (الأعمار والأدمن) كما هي بدون أي نقصان
        $middleware->alias([
            'is.adult' => \App\Http\Middleware\CheckAge::class,
            'admin'    => CheckAdmin::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->shouldRenderJsonWhen(
            fn(Request $request) => $request->is('api/*') || $request->expectsJson(),
        );
    })->create();
