<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\ApplicationController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Start Auth Route

//Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

//Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Employer Register
Route::get('/register/employer', [RegisterController::class, 'employerRegister'])->name('register.employer');
Route::post('/register/employer', [RegisterController::class, 'employerRegisterPost'])->name('register.employer.post');

//End Auth Route

//Dashboard

// Search
Route::get('/search', [\App\Http\Controllers\SearchController::class, 'search'])->name('search');

Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get('/admin/index', [ApplicationController::class, 'index'])->name('admin.index');

    Route::resource('/admin/categories', CategoryController::class);

    Route::resource('/admin/users', UserController::class);

    Route::resource('/admin/payments', PaymentController::class);
});
