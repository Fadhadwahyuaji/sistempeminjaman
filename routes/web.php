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

// pengguna
Route::get('/data-mahasiswa', [AdminController::class, 'mahasiswa'])->name('mahasiswa');
Route::get('/data-admin', [AdminController::class, 'admin'])->name('admin');

// pengguna
Route::get('/data-barang-subbag', [AdminController::class, 'subbag'])->name('subbag');
Route::get('/data-barang-TI', [AdminController::class, 'TI'])->name('teknik_informatika');
Route::get('/data-barang-TM', [AdminController::class, 'TM'])->name('teknik_mesin');
Route::get('/data-barang-TPTU', [AdminController::class, 'TPTU'])->name('tptu');
Route::get('/data-barang-KP', [AdminController::class, 'KP'])->name('keperawatan');

// peminjaman
Route::get('/peminjaman', [AdminController::class, 'peminjaman'])->name('peminjaman');
// peminjaman
Route::get('/pengembalian', [AdminController::class, 'pengembalian'])->name('pengembalian');
// peminjaman
Route::get('/riwayat-peminjaman', [AdminController::class, 'riwayat_peminjaman'])->name('riwayat_peminjaman');

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