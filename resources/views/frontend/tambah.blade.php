@extends('frontend.layouts.master')
@section('content')
<link rel="stylesheet" href={{asset("css/tambah.css")}}>
		<!-- Tambah Bibit Section -->
		<section class="tambah-bibit section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- Tambah Bibit Inner -->
						<div class="tambah-bibit-inner">
							<h2>Tambah Produk Benih</h2>
							<form method="POST" action="{{ route('BenihData.store') }}" enctype="multipart/form-data">
								@csrf
								<!-- Input untuk atribut Benih -->
								<div class="form-group">
									<label for="varietas">Varietas Benih</label>
									<input type="text" class="form-control" id="varietas" name="varietas" required>
								</div>
								<div class="form-group" style="margin-bottom: 30px; margin-top: 20px;">
									<label for="jenis_benih">Jenis Benih</label>
									<select class="form-control" id="jenis_benih" name="jenis_benih" required>
										<option value="">Pilih Jenis Bibit</option>
										<option value="Padi">Padi</option>
										<option value="Kedelai">Kedelai</option>
									</select>
								</div>
								<div class="form-group">
									<label for="stok_benih">Stok Benih</label>
									<input type="number" class="form-control" id="stok_benih" name="stok_benih" required>
								</div>
								<div class="form-group">
									<label for="kualitas_benih">Kelas Benih</label>
									<input type="text" class="form-control" id="kualitas_benih" name="kualitas_benih" required>
								</div>
								<div class="form-group">
									<label for="harga_benih">Harga Benih</label>
									<input type="number" class="form-control" id="harga_benih" name="harga_benih" required>
								</div>
								<div class="form-group">
									<label for="tgl_masuk">Tanggal Masuk</label>
									<input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk" required>
								</div>
								<div class="form-group">
									<label for="turun_gudang">Turun Gudang</label>
									<input type="number" class="form-control" id="turun_gudang" name="turun_gudang" required>
								</div>
								<div class="form-group">
									<label for="jemur_kering">Jemur Kering</label>
									<input type="number" class="form-control" id="jemur_kering" name="jemur_kering" required>
								</div>
								<div class="form-group">
									<label for="blower1">Blower 1</label>
									<input type="number" class="form-control" id="blower1" name="blower1" required>
								</div>
								<div class="form-group">
									<label for="benih_susut">Benih Susut</label>
									<input type="number" class="form-control" id="benih_susut" name="benih_susut" required>
								</div>
								<div class="form-group">
									<label for="biji_kecil">Biji Kecil</label>
									<input type="number" class="form-control" id="biji_kecil" name="biji_kecil" required>
								</div>
								<div class="form-group">
									<label for="jumlah_benih">Jumlah Benih</label>
									<input type="number" class="form-control" id="jumlah_benih" name="jumlah_benih" required>
								</div>
								<div class="form-group">
									<label for="id_akunp">ID Akun Produsen</label>
									<input type="number" class="form-control" id="id_akunp" name="id_akunp" required>
								</div>
								<div class="form-group">
									<label for="foto_benih">Foto Benih</label>
									<input type="file" class="form-control-file" id="foto_benih" name="foto_benih" accept="image/*" required>
								</div>
								<button type="submit" class="btn btn-primary">Simpan</button>
							</div>
							</form>
						</div>
						</div>
						<!--/ End Tambah Bibit Inner -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Tambah Bibit Section -->
		<script src="{{ asset('js/tambah.js') }}"></script>
@stop
