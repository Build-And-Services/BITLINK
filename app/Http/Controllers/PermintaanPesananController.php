<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermintaanPesananController extends Controller
{
    public function index()
    {
        try {
            return view('produsen.permintaan-pesanan');
        } catch (\Throwable $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError($e->getMessage());
        }
    }
    public function invoice()
    {
        try {
            return view('produsen.invoice');
        } catch (\Throwable $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError($e->getMessage());
        }
    }
}
