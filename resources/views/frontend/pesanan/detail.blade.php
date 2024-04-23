@extends('frontend.layouts.master')
@section('content')
    <link rel="stylesheet" href={{ asset('css/detail.css') }}>
    <section class="detail-bibit section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="single-bibit">
                        <div class="image">
                            <img src="{{ asset('img/' . $benihData->foto_benih) }}" alt="#">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-bibit">
                        <div class="content">
                            <h2>{{ $benihData->varietas }}</h2>
                            <p class="mrh text-merah">Rp {{ $benihData->harga_benih }} /kg</p>
                            <p><span
                                    class="badge text-bg-warning bg-yellow">{{ $benihData->akunProdusen->nama_perusahaan }}</span>
                            </p>
                            <h4>Informasi Stok Benih</h4>
                            <p class="text-with-underline">Stok: {{ $benihData->stok_benih }}</p>
                            <p class="text-with-underline">Jenis: {{ $benihData->jenis_benih }}</p>
                            <p class="text-with-underline">Kelas Benih: {{ $benihData->kualitas_benih }}</p>
                            <form method="GET" style="margin-top: 16px">
                                @csrf
                                <div style="display: grid;">
                                    <label for="id_pembayaran">ID Pembayaran</label>
                                    <input id="id_pembayaran" name="id_pembayaran" type="text">
                                </div>
                                <button style="background-color: #4D4AE7; margin-top: 16px;" class="btn btn-primary">Cek
                                    Pengiriman</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/detail.js') }}"></script>
@endsection
