<?php

use App\Http\Controllers\Customer\Auth\LoginController;
use App\Http\Controllers\Customer\Auth\RegisterController;
use App\Http\Controllers\Customer\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('customer')->group(function () {

    // Guest — login & register 
    Route::middleware('guest:customer')->group(function () {
        // Route::get('login', [LoginController::class, 'create'])->name('login');
        // Route::post('login', [LoginController::class, 'store']);
        // Route::get('register', [RegisterController::class, 'create'])->name('register');
        // Route::post('register', [RegisterController::class, 'store']);
    });

    // Logged-in customer area
    Route::middleware('auth:customer')->group(function () {
        // Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        // Route::post('logout', [LoginController::class, 'destroy'])->name('logout');
        // Route::get('profile', ...)->name('profile');
    });
});