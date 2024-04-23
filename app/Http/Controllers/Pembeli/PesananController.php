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
        return view('produsen.pesanan.index', compact('benihData'));
    }
    public function detail($id)
    {
        $benihData = BenihData::find($id);
        return view('produsen.pesanan.detail', compact('benihData'));
    }
}
