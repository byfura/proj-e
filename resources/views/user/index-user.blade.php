@extends('user.layout.base')

@section('style')
<style type="text/css">
	.input-group-append .dropdown-toggle {
		border-radius: 0;
	}
	header {
		padding: 0.5rem 0.25rem;
		border-bottom: 1px #ddd solid ;

		overflow: hidden;
	}
	main {
		padding-top: 1rem;
	}
	h5.card-title {
		margin-bottom: 0.1rem;
	}
</style>
@endsection

@section('content')

@component('user.components.navbar', ['searchbar' => false, 'user' => 'User-Test'])
@endcomponent

<header>
	
	<div class="container">
		<div class="d-flex justify-content-center">
			
				<a href="{{url('product')}}">
					<img src="https://via.placeholder.com/300x50/aadeff?text=View+Product" alt="Trulli">
				</a>
			
				<a href="{{url('service')}}">
					<img src="https://via.placeholder.com/300x50/aaffde?text=View+Service" alt="Trulli">
				</a>
			
		</div>
	</div>

</header>

<main>

<div class="container h-100">
	<div class="row">
		<div class="col-md-3 order-md-2">
			<div class="list-group">
			  <button type="button" class="list-group-item list-group-item-action active">
			    Status
			  </button>
			  <button type="button" class="list-group-item list-group-item-action">Riwayat</button>
			  <button type="button" class="list-group-item list-group-item-action">Chat & Call</button>
			</div>
		</div>
		<div class="col">
			<h1>Konten Status</h1>
		</div>
	</div>
</div>

</main>

@component('user.components.footer')
@endcomponent

 
@endsection