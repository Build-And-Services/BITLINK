<?php

use App\Http\Controllers\BenihDataController;
use App\Http\Controllers\DataPencatatanController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('frontend.home');
})->name('home');


Route::get('/pages/tambah', function () {
    return view('frontend.tambah');
});



Route::get('/tambah-bibit', [BenihDataController::class, 'create'])->name('BenihData.create');

Route::post('/benih_data', [BenihDataController::class, 'store'])->name('BenihData.store');

Route::get('/benih_data/{id}', [BenihDataController::class, 'detail'])->name('BenihData.detail');
Route::get('/benih_data/{id}/show', [BenihDataController::class, 'show'])->name('BenihData.show');
Route::get('/benih_data/{id}/edit', [BenihDataController::class, 'edit'])->name('BenihData.edit');

Route::get('/pages/display', [BenihDataController::class, 'index'])->name('BenihData.display');
Route::get('/detail/{id}', [BenihDataController::class, 'detail'])->name('frontend.detail');
// Route::get('/edit/{id}', [BenihDataController::class, 'edit'])->name('frontend.edit');
Route::get('/edit/{id}', [BenihDataController::class, 'edit'])->name('frontend.edit');


Route::put('/update/{id}', [BenihDataController::class, 'update'])->name('BenihData.update');

;
Route::delete('/benih_data/{id}', [BenihDataController::class, 'destroy'])->name('BenihData.destroy');
Route::get('/frontend/display', [BenihDataController::class, 'index'])->name('frontend.display');

Route::get('/pages/display/padi', [BenihDataController::class, 'displayPadi'])->name('BenihData.displayPadi');
Route::get('/pages/display/kedelai', [BenihDataController::class, 'displayKedelai'])->name('BenihData.displayKedelai');

Route::get('/pages/display/padi/pertanian', [BenihDataController::class, 'displayPadiPertanian'])->name('BenihData.displayPadiPertanian');
Route::get('/pages/display/kedelai/pertanian', [BenihDataController::class, 'displayKedelaiPertanian'])->name('BenihData.displayKedelaiPertanian');

Route::get('/benih_data/{id}/pertanian', [BenihDataController::class, 'detailpertanian'])->name('BenihData.detailpertanian');
// Route::post('/detailpesan',[BenihDataController::class, 'detailPesanan'])->name('BenihData.detailPesanan');
// Route::post('/detailpesan', 'BenihDataController@detailPesanan')->name('detail.pesanan');

Route::post('/pesan/{id}', 'BenihDataController@pesan')->name('frontend.pesan');


include __DIR__ . '/faisal.php';
require __DIR__."/heri.php";
