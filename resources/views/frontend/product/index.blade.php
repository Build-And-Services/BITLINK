@extends('frontend.layouts.master')
@section('content')
<link rel="stylesheet" href={{asset("css/display.css")}}>
{{-- <script src="{{ asset('js/display.js') }}"></script> --}}
<!-- Display Bibit -->
		<section class="display-bibit section">
			@if (Auth::user()->role == 'PRODUSEN')
				<div class="container mt-3">
					<div class="row">
						<div class="col-md-12 px-4">
							<a href="/tambah-benih" class="btn btn-success">
								Tambah Data
							</a>
						</div>
					</div>
				</div>
			@endif
			<div class="container mt-3">
				<div class="row">
					@foreach ($benih as $item)
						<div class="col-lg-4 col-md-6 col-12">
							<div class="single-bibit">
								<a href="/{{ $item->jenis_benih }}/detail/{{ $item->id_benih }}">
									<div class="image">
										<img src="{{ asset($item->foto_benih) }}" alt="#">
									</div>
									<div class="content">
										<h4>{{ $item->varietas }}</h4>
										<p>Harga: Rp {{ $item->harga_benih }}</p>
										<p>Stok: {{ $item->stok_benih }}</p>
									</div>
								</a>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</section>
		<!-- End Display Bibit Section -->
<script src="{{ asset('js/display.js') }}"></script>
@stop
