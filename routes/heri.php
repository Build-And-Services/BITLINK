<?php

use App\Http\Controllers\Auth\AuthController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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


Route::controller(AuthController::class)->group(function(){
    Route::get('/login', 'index');
    Route::post('/login', 'login');
    Route::get('/logout', 'logout');
});