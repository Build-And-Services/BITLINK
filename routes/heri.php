<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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


Route::get('/login', function (){
    return view('auth.login');
});

Route::post('/login', function (Request $request){
    
    $credentials = $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);

    try {
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    } catch (\Throwable $th) {
        return back();
    }
});


Route::get('/logout', function (){
    Auth::logout();
    return back();
});