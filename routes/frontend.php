<?php
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\Contact\ContactController;
use App\Http\Controllers\Frontend\Review\ReviewController;
use App\Http\Controllers\Frontend\Menu\MenuController;
use Illuminate\Support\Facades\Route;

// Contact Page Route
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Review Page Route
Route::get('/review', [ReviewController::class, 'index'])->name('review');

// Menu Page Route
Route::get('/menu', [MenuController::class, 'index'])->name('menu');

// Home Page Route
Route::get('/', [HomeController::class, 'index'])->name('home');
