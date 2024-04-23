@extends('frontend.layouts.master')
@section('content')
<link rel="stylesheet" href={{asset("css/display.css")}}>
{{-- <script src="{{ asset('js/display.js') }}"></script> --}}
{{-- <div class="container">
	<div class="row">
		<div class="col-md-12">
			<button class="btn btn-primary" style="margin-top: 30px";><a href="{{ url('/pages/tambah') }}" style="color: white; text-decoration: none;">Tambah Produk</a></button>
		</div>
	</div>
</div> --}}
		<!-- Display Bibit -->
		<section class="display-bibit section">
			<div class="container">
				<div class="row">

						<div class="col-lg-4 col-md-6 col-12">
							<div class="single-bibit">
								<a href="/padi/detail">
									<div class="image">
										<img src="{{ url('img/1712425584.png') }}" alt="#">
									</div>
									<div class="content">
										<h4>Logawa</h4>
										<p>Harga: Rp 50.000</p>
										<p>Stok: 20</p>
									</div>
								</a>
							</div>
						</div>
				</div>
			</div>
		</section>
		<!-- End Display Bibit Section -->
<script src="{{ asset('js/display.js') }}"></script>
@stop
