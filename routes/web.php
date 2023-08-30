<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TabelController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TestInputController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/test-controller/{param1}', [TestController::class, 'index'])->name('testcontroller');
Route::get('/artikel/{parameter}', [ArtikelController::class, 'home']);
Route::get('/table', [TabelController::class, 'index']);



Route::get('/crud_user', function () {
    return view('crud_user');
});


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/forgot-password', [AuthController::class, 'forgot_password'])->name('forgot.password');
Route::get('/register', [AuthController::class, 'register'])->name('register');


Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/layouts', [AdminController::class, 'layouts'])->name('layouts');
Route::get('/tables', [AdminController::class, 'tables'])->name('tables');
Route::get('/pages/profile', [AdminController::class, 'profile'])->name('profile');
Route::get('/pages/setting', [AdminController::class, 'setting'])->name('setting');
Route::get('/pages/billing', [AdminController::class, 'billing'])->name('billing');
Route::get('/pages/pricing', [AdminController::class, 'pricing'])->name('pricing');
Route::get('/pages/404error', [AdminController::class, 'error'])->name('404error');


// database
Route::get('/test-input-dummy', [TestInputController::class, 'index']);
Route::get('/test', [TestInputController::class, 'test_input'])->name('input.get');
Route::get('/test-form', [TestInputController::class, 'form']);
Route::get('/get-data', [TestInputController::class, 'get_data']);