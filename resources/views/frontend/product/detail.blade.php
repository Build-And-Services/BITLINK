@extends('frontend.layouts.master')
@section('content')
<link rel="stylesheet" href={{asset("css/detail.css")}}>

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
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
<section class="detail-bibit section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="single-bibit">
            <div class="image">
              <img src="{{ url('img/1712425584.png') }}" alt="Logawa Seeds Image">
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          {{-- <h2>Detail Bibit</h2> --}}
          <div class="single-bibit">
            <div class="content">
              <h2>Logawa</h2>
              <p class="mrh text-merah">Rp 20.000 /kg</p>
              <p><span class="badge text-bg-warning bg-yellow">PT Logawa hwo aini</span></p>
              <h4>Informasi Stok Benih</h4>
              <p class="text-with-underline">Stok: 20</p>
              <p class="text-with-underline">Jenis: Padi</p>
              <p class="text-with-underline">Kelas Benih: A</p>

              <div class="quantity-control">
                <label for="quantity" class="visually-hidden">Quantity</label>
                <div class="input-group">
                  <button type="button" class="btn btn-sm btn-secondary" aria-label="Decrease Quantity" onclick="decrementQuantity()">-</button>
                  <input type="number" id="quantity" name="quantity" min="1" value="1" aria-label="Benih Quantity">
                  <span class="input-group-text">/kg</span>
                  <button type="button" class="btn btn-sm btn-primary" aria-label="Increase Quantity" onclick="incrementQuantity()">+</button>
                </div>
              </div>


              <a href="/padi/checkout" class="btn btn-success" role="button" aria-disabled="true">Pesan</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

  <script>
  function incrementQuantity() {
    const quantityInput = document.getElementById('quantity');
    let quantity = parseInt(quantityInput.value);
    quantity = Math.max(quantity + 1, 1); // Ensure minimum quantity of 1
    quantityInput.value = quantity;
    updateOrderButton();
  }

  function decrementQuantity() {
    const quantityInput = document.getElementById('quantity');
    let quantity = parseInt(quantityInput.value);
    quantity = Math.max(quantity - 1, 1); // Ensure minimum quantity of 1
    quantityInput.value = quantity;
    updateOrderButton();
  }

  function updateOrderButton() {
    const quantity = document.getElementById('quantity').value;
    const orderButton = document.querySelector('.detail-bibit .content .btn.btn-success');
    orderButton.disabled = quantity === '0'; // Disable button if quantity is 0
  }

  // Call updateOrderButton on page load to handle initial state
  updateOrderButton();
  </script>
<script src="{{ asset('js/detail.js') }}"></script>

<!-- End Detail Bibit Section -->
@endsection
