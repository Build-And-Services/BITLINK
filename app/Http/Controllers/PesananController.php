<?php

namespace App\Http\Controllers;

use App\Models\BenihData;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
        $benihData = BenihData::all();
        return view('frontend.pesanan.index', compact('benihData'));
    }
    public function detail($id)
    {
        $benihData = BenihData::find($id);
        return view('frontend.pesanan.invoice', compact('benihData'));
    }
}
