<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfileController;

// Form dan pengiriman laporan tetap dapat diakses masyarakat tanpa login.
Route::get('/', fn () => redirect()->route('laporan.form'))->name('home');
Route::get('/lapor', [LaporanController::class, 'create'])->name('laporan.form');
Route::post('/lapor', [LaporanController::class, 'store'])->name('laporan.store');
Route::get('/lapor/berhasil', [LaporanController::class, 'confirmation'])->name('laporan.konfirmasi');

// Autentikasi manual.
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});

Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')->name('logout');

// Area petugas hanya dapat diakses setelah login.
Route::middleware('auth')->group(function () {
    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
    Route::get('/profil', [ProfileController::class, 'show'])->name('profile');
});
