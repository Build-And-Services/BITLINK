@extends('frontend.master')
@section('content')

<section class="edit-bibit section">
  <link rel="stylesheet" href={{asset("css/edit.css")}}>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Edit Data</h2>
        <form action="{{ route('BenihData.update', $benihData->id_benih) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <input type="hidden" name="id_benih" value="{{ $benihData->id_benih }}">
          <input type="hidden" name="id_akunp" value="{{ $benihData->id_akunp }}">

          <div class="form-group">
            <label for="varietas">Varietas:</label>
            <input type="text" name="varietas" id="varietas" value="{{ old('varietas', $benihData->varietas) }}" class="form-control" required>
            @error('varietas')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group" style="margin-bottom: 30px;">
            <label for="jenis_benih">Jenis Benih:</label>
            <select name="jenis_benih" id="jenis_benih" class="form-control" required>
              <option value="{{ old('jenis_benih', $benihData->jenis_benih) }}">{{ $benihData->jenis_benih }}</option>
              <option value="Padi" {{ old('jenis_benih', $benihData->jenis_benih) == 'padi' ? 'selected' : '' }}>Padi</option>
              <option value="Kedelai" {{ old('jenis_benih', $benihData->jenis_benih) == 'kedelai' ? 'selected' : '' }}>Kedelai</option>
            </select>
            @error('jenis_benih')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="stok_benih">Stok Benih:</label>
            <input type="number" name="stok_benih" id="stok_benih" value="{{ old('stok_benih', $benihData->stok_benih) }}" class="form-control" required>
            @error('stok_benih')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="kualitas_benih">Kelas Benih:</label>
            <input type="text" name="kualitas_benih" id="kualitas_benih" value="{{ old('kualitas_benih', $benihData->kualitas_benih) }}" class="form-control" required>
            @error('kualitas_benih')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="harga_benih">Harga Benih:</label>
            <input type="number" name="harga_benih" id="harga_benih" value="{{ old('harga_benih', $benihData->harga_benih) }}" class="form-control" required>
            @error('harga_benih')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="img-preview">
            <img src="{{ asset('img/'.$benihData->foto_benih) }}" alt="#">
          </div>
        
          <div class="form-group">
            <label for="foto_benih">Foto Benih:</label>
            <input type="file" name="foto_benih" id="foto_benih" value="{{ old('foto_benih', $benihData->foto_benih) }}"class="form-control">
            @error('foto_benih')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="tgl_masuk">Tanggal Masuk:</label>
            <input type="date" name="tgl_masuk" id="tgl_masuk" value="{{ old('tgl_masuk', $benihData->tgl_masuk) }}" class="form-control" required>
            @error('tgl_masuk')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="turun_gudang">Turun Gudang:</label>
            <input type="number" name="turun_gudang" id="turun_gudang" value="{{ old('turun_gudang', $benihData->turun_gudang) }}" class="form-control" required>
            @error('turun_gudang')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="jemur_kering">Jemur Kering:</label>
            <input type="number" name="jemur_kering" id="jemur_kering" value="{{ old('jemur_kering', $benihData->jemur_kering) }}" class="form-control" required>
            @error('jemur_kering')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="blower1">Blower 1:</label>
            <input type="number" name="blower1" id="blower1" value="{{ old('blower1', $benihData->blower1) }}" class="form-control" required>
            @error('blower1')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="benih_susut">Benih Susut:</label>
            <input type="number" name="benih_susut" id="benih_susut" value="{{ old('benih_susut', $benihData->benih_susut) }}" class="form-control" required>
            @error('benih_susut')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="biji_kecil">Biji Kecil:</label>
            <input type="number" name="biji_kecil" id="biji_kecil" value="{{ old('biji_kecil', $benihData->biji_kecil) }}" class="form-control" required>
            @error('biji_kecil')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="jumlah_benih">Jumlah Benih:</label>
            <input type="number" name="jumlah_benih" id="jumlah_benih" value="{{ old('jumlah_benih', $benihData->jumlah_benih) }}" class="form-control" required>
            @error('jumlah_benih')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
      </div>
    </div>
  </div>
</section>
<script src="{{ asset('js/edit.js') }}"></script>

@stop
