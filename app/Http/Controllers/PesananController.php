<?php

namespace App\Http\Controllers;

use App\Models\BenihData;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
        $benihData = Pesanan::with(['pembeli', 'benihData'])->latest()->get();
        return view('frontend.pesanan.index', compact('benihData'));
    }
    public function invoice($id)
    {
        $pesanan = Pesanan::with(['pembeli', 'benihData'])->where('id', $id)->first();
        $perusahaan = \DB::table('benih_data')
            ->where('id_benih', $pesanan->id_benih)
            ->join('users', 'users.id', '=', 'benih_data.id_akunp')
            ->join('data_akun_produsen', 'data_akun_produsen.id_user', '=', 'users.id')
            ->select([
                'data_akun_produsen.nama_perusahaan',
                'data_akun_produsen.nomor_legalitas_usaha',
                'data_akun_produsen.alamat_lengkap'
            ])->first();
        return view(
            'frontend.pesanan.invoice',
            [
                'getDetailInvoice' => $pesanan,
                'getPerusahaan' => $perusahaan
            ]
        );
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
    public function updateStatusPengiriman(Request $request)
    {
        try {
            \DB::beginTransaction();
            $pesanan = Pesanan::find($request->id_pembayaran_result);
            $pesanan->update([
                'status_pengiriman' => 'DITERIMA',
                'tgl_diterima' => now()
            ]);
            \DB::commit();
            return response()->json([
                'status_pengiriman' => $pesanan->status_pengiriman
            ]);
        } catch (\Throwable $th) {
            \DB::rollBack();
            return response()->json('failed');
        }

    }

    public function store(Request $request)
    {
        try{
            Pesanan::create($request->all());
            return redirect('/pesanan');
        }catch (\Throwable $th) {
            dd($th);
            return back();
        }
    }
}
