<?php

use Illuminate\Support\Facades\Route;

Route::get('/produsen/pesanan', [App\Http\Controllers\Produsen\PesananController::class, 'index'])->name('produsen.pesanan.index');
Route::get('/produsen/pesanan/{id}', [App\Http\Controllers\Produsen\PesananController::class, 'detail'])->name('produsen.pesanan.detail');

Route::get('/pesanan', [App\Http\Controllers\Pembeli\PesananController::class, 'index'])->name('pesanan.index');
Route::get('/pesanan/{id}', [App\Http\Controllers\Pembeli\PesananController::class, 'detail'])->name('pesanan.detail');