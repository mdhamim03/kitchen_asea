<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::prefix('backend')->middleware(['auth:web', 'verified'])->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Dashboard
    |--------------------------------------------------------------------------
    */


    Route::get('dashboard', function () {
        return Inertia::render('Backend/Dashboard', [
            'item' => Auth::user(),
        ]);
    })->name('dashboard');

    Route::middleware('auth:web')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});

// Route::get('/dashboard', function () {
//     return Inertia::render('Backend/Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';
