<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Middleware\ThrottleRequests;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;

Route::view('/', 'pages.home')->name('home');
// Show registration form (GET)

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::post('/profile/change-password', [ProfileController::class, 'changePassword'])->name('profile.changePassword');
    Route::post('/profile/change-email', [ProfileController::class, 'changeEmail'])->name('profile.changeEmail');
    Route::view('/shop', 'pages.shop')->name('shop');
});
// Show register form
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// // Handle registration
// Route::post('/register', [RegisterController::class, 'register']);
Route::view('/rank', 'pages.rank')->name('rank');
Route::view('/download', 'pages.download')->name('download');
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');