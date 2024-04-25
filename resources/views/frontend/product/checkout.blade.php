@extends('frontend.layouts.master')

@section('content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Stok Benih</h2>
                        <ul class="bread-list">
                            <li><a href="index.html">Dashboard</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Stok Benih</li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Pesanan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="container py-5">

        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Barang yang dibeli</h5>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-3">
                        <img src="{{ $benih->foto_benih }}" class="img-thumbnail" alt="Logawa Seeds Image">
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-5">
                                <h5>Logawa</h5>
                                <p class="mt-2 text-danger">Rp. {{ number_format($benih->harga_benih, 0, ',', '.') }} /kg
                                </p>
                                <p class="badge badge-warning font-bold">
                                    {{ $benih->akunProdusen->dataProdusen->nama_perusahaan }}</p>
                            </div>
                            <div class="col-md-7">
                                <h4>Informasi Benih</h4>
                                <p>Stock: {{ $benih->stok_benih }}</p>
                                <p>Jenis Padi: {{ $benih->jenis_benih }}</p>
                                <p>Kelas Benih: {{ $benih->kualitas_benih }}</p>
                                <p>Quantiy: {{ $quantity }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header bg-white">
                        <h6>
                            Ringkasan Belanja
                        </h6>
                    </div>
                    <div class="card-body">
                        <form action="/checkout" method="POST">
                            <div class="mb-3 text-dark">
                                <div>
                                    <label for="alamat_lengkap" class="form-label">Alamat Lengkap</label>
                                    <input type="text" name="alamat_lengkap" class="form-control">
                                </div>
                                <div>
                                    <label for="telepon" class="form-label">Telepon</label>
                                    <input type="text" name="telepon" class="form-control">
                                </div>
                            </div>
                            <h6>Total Pesanan</h6>
                            <div class="row justify-content-center mt-3">
                                <div class="col-md-6">
                                    <p>Total Harga ({{ $quantity }} Barang)</p>
                                </div>
                                <div class="col-md-6 text-end">
                                    <p style="text-align: end">Rp {{ number_format($benih->harga_benih, 0, ',', '.') }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-center mt-3">
                                <div class="col-md-6">
                                    <h6>Total Tagihan</h6>
                                </div>
                                <div class="col-md-6 text-end">
                                    <h6 style="text-align: end">Rp
                                        {{ number_format($quantity * $benih->harga_benih, 0, ',', '.') }}</h6>
                                </div>
                            </div>
                            <hr>
                            <div style="display: flex; justify-content: end;">
                                @csrf
                                <input type="hidden" name="id_benih" value="{{ $benih->id_benih }}">
                                <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="quantity" value="{{ $quantity }}">
                                <input type="hidden" name="harga" value="{{ $benih->harga_benih }}">
                                <button class="btn btn-success">Bayar Sekarang</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
