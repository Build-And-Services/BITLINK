<?php

namespace App\Http\Controllers;

use App\Models\BenihData;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
        $benihData = BenihData::all();
        return view('frontend.pesanan.index', compact('benihData'));
    }
    public function invoice($id)
    {
        $pesanan = Pesanan::find($id);
        return view('frontend.pesanan.invoice', compact('pesanan'));
    }
    public function cekPengiriman(Request $request)
    {
        // Temukan pesanan berdasarkan ID pembayaran
        $pesanan = Pesanan::find($request->id_pembayaran);

        if ($pesanan) {
            return response()->json([
                'status_pengiriman' => $pesanan->status_pengiriman
            ]);
        } else {
            // Pesanan tidak ditemukan, kirim respons dengan pesan kesalahan
            return response()->json([
                'error' => 'Pesanan tidak ditemukan'
            ], 404);
        }
    }

}
