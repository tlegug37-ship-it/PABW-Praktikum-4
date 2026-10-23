<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;

Route::get('/', [LaporanController::class, 'index'])->name('laporan.index');
Route::get('/lapor', [LaporanController::class, 'create'])->name('laporan.form');
Route::post('/lapor', [LaporanController::class, 'store'])->name('laporan.konfirmasi');