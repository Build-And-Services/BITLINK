<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermintaanPesananController;




Route::get('/permintaan-pesanan', [PermintaanPesananController::class, 'index']);
Route::get('/permintaan-pesanan/invoice', [PermintaanPesananController::class, 'invoice']);



