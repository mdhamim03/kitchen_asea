<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
        then: function () {
            // Public frontend routes
            Route::middleware('web')
                ->name('frontend.')
                ->group(base_path('routes/frontend.php'));

            // Customer routes
            Route::middleware('web')
                ->name('customer.')
                ->group(base_path('routes/customer.php'));
        }
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->web(append: [
            \App\Http\Middleware\HandleInertiaRequests::class,
            \Illuminate\Http\Middleware\AddLinkHeadersForPreloadedAssets::class,
        ]);
        // $middleware->redirectGuestsTo(function ($request) {
        //     if ($request->is('backend', 'backend/*')) {
        //         return route('backend.login');              
        //     }
        //     if ($request->is('customer', 'customer/*')) {
        //         return route('customer.login'); 
        //     }
        //     return route('frontend.index');        
        // });
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
