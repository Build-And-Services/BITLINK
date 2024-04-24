@extends('frontend.layouts.master')
@section('content')
<link rel="stylesheet" href={{asset("css/detail.css")}}>
     <!-- Detail Bibit -->
    <section class="detail-bibit section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="single-bibit">
                        <div class="image">
                            <img src="{{ asset('img/1.png') }}" alt="#">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    {{-- <h2>Detail Bibit</h2> --}}
                    <div class="single-bibit">
                        <div class="content">
                            <h4>Detail Produk</h4>
                            <p class="text-with-underline">Varietas : INPARI 42</p>
                            <p class="text-with-underline">Jenis    : Padi</p>
                            <p class="text-with-underline">Kelas    : Benih Dasar (CB)</p>
                        </div>
                        <div class="d-flex">
                            <a href="{{url('detail-distribusi')}}" class="btn btn-primary">Status Pesanan</a>
                            <a href="{{url('permintaan-pesanan/invoice')}}" class="btn btn-primary ml-2">Invoice</a>
                        </div>

                        <!-- Pop-up konfirmasi -->
                        <div class="confirmation-popup" id="confirmation-popup">
                            <h2>Apakah Anda yakin akan menghapus data?</h2>
                            <button id="confirm-delete" class="btn btn-danger">Ya</button>
                            <button id="cancel-delete" class="btn btn-primary">Tidak</button>
                        </div>

                        <script>
                        document.getElementById('delete-button').addEventListener('click', function(event) {
                            event.preventDefault();
                            document.getElementById('confirmation-popup').style.display = 'block';
                        });

                        document.getElementById('confirm-delete').addEventListener('click', function() {
                            document.getElementById('delete-form').submit();
                        });

                        document.getElementById('cancel-delete').addEventListener('click', function() {
                            document.getElementById('confirmation-popup').style.display = 'none';
                        });
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </section>
<script src="{{ asset('js/detail.js') }}"></script>

    <!-- End Detail Bibit Section -->
@stop
