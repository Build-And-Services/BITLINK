<?php

namespace App\Http\Controllers\Pembeli;

use App\Models\BenihData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PesananController extends Controller
{
    public function index()
    {
        $benihData = BenihData::all();
        return view('pembeli.pesanan.index', compact('benihData'));
    }
    public function detail($id)
    {
        $benihData = BenihData::find($id);
        return view('pembeli.pesanan.detail', compact('benihData'));
    }
}
