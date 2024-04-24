<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function padi(){
        // get benih data jenis padi
        return view('frontend.product.index');
    }
    
    public function kedelai(){
        // get benih data jenis kedelai
        return view('frontend.product.index');
    }
    
    public function detail($id){
        // get benih data detail id
        return view('frontend.product.detail');
    }

    public function checkout(){
        return view('frontend.product.checkout');
    }
}
