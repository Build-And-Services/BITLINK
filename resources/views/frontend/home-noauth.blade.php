@extends('frontend.layouts.no-auth')
@section('content')
<div class="py-5" style="height: 100vh; width: 100vw;background-image: url({{ url('/img/background/login.jpg') }}); background-repeat: no-repeat; background-size: cover;">
	<div class="container" style="height: 90%">
		<div class="row" style="height: 100%;">
			<div class="col-md-7 rounded p-3" style="height: 80%; background-color: rgba(255, 255, 255, 0.3)">
				<img src="{{ url('/img/1712070101.png') }}" width="200" alt="">
				<p class="mx-3">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lobortis maximus nunc, ac rhoncus odio congue quis. Sed ac semper orci, eu porttitor lacus. 
				</p>
			</div>
		</div>
	</div>
</div>
@endsection	









