<?php

use Illuminate\Support\Facades\Route;

Route::prefix('padi')->group(function(){
    Route::get('/', function (){
        return view('frontend.product.index');
    });
    Route::get('/detail', function (){
        return view('frontend.product.detail');
    });
    Route::get('/checkout', function (){
        return view('frontend.product.checkout');
    });
});

Route::prefix('kedelai')->group(function(){
    Route::get('/', function (){
        return view('frontend.product.index');
    });
    Route::get('/detail', function (){
        return view('frontend.product.detail');
    });
    Route::get('/checkout', function (){
        return view('frontend.product.checkout');
    });
});