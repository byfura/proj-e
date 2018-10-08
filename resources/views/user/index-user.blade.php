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

		background: url('https://i.ytimg.com/vi/4QSWfKU3JeA/maxresdefault.jpg');
		/*background-size: 100% auto;*/
    background-position: center center;
	}
	main {
		padding: 1rem 0;
		min-height: 80vh;
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

<!-- <div class="container h-100">
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
</div> -->

<div class="container-fluid">
	<div class="row px-3">
		<div class="col-md-3 order-md-3">
			<div class="list-group">
				<a href="{{ url('u/userpoint/i') }}" class="d-flex justify-content-between list-group-item list-group-item-action"><span class="fa fa-lg fa-coins"></span> User Point <span>&nbsp;</span></a>
				<a href="{{ url('u/userpoint/i') }}" class="d-flex justify-content-between list-group-item list-group-item-action"><span class="fa fa-lg fa-star"></span> Special Membership <span>&nbsp;</span></a>
			  <a data-toggle="collapse" data-target="#c-contract" href="#" class="d-flex justify-content-between list-group-item list-group-item-action"><span class="fa fa-lg fa-list"></span> Contract <span class="fa fa-sm fa-caret-down mt-2"></span></a>
				<div id="c-contract" class="collapse">
					<a href="{{ url('u/contract') }} " class="d-flex justify-content-between list-group-item list-group-item-action"> Contract</a>
					<a href="{{ url('u/payment') }} " class="d-flex justify-content-between list-group-item list-group-item-action"> Payment</a>
					<a href="{{ url('u/cancellation') }} " class="d-flex justify-content-between list-group-item list-group-item-action"> Cancellation</a>
				</div>
			  <!-- <a data-toggle="collapse" data-target="#c-config" href="#" class="d-flex justify-content-between list-group-item list-group-item-action"><span class="fa fa-lg fa-cog"></span> Settings <span class="fa fa-sm fa-caret-down mt-2"></span></a>
				<div id="c-config" class="collapse">
					<a href="{{ url('u/userprofile/i') }} " class="d-flex justify-content-between list-group-item list-group-item-action"> Profile</a>
					<a href="{{ url('u/productsuppliertype/i') }} " class="d-flex justify-content-between list-group-item list-group-item-action"> Supplier Type</a>
					<a href="{{ url('u/productsuppliervarval/i') }} " class="d-flex justify-content-between list-group-item list-group-item-action"> Variable Value</a>
				</div>
				<a data-toggle="collapse" data-target="#c-product" href="#" class="d-flex justify-content-between list-group-item list-group-item-action"><span class="fa fa-lg fa-archive"></span> Product <span class="fa fa-sm fa-caret-down mt-2"></span></a>
				<div id="c-product" class="collapse">
					<a href="{{ url('u/product/i') }} " class="d-flex justify-content-between list-group-item list-group-item-action"> Product</a>
					<a href="{{ url('u/producttype/i') }} " class="d-flex justify-content-between list-group-item list-group-item-action"> Product Type</a>
					<a href="{{ url('u/productvarval/i') }} " class="d-flex justify-content-between list-group-item list-group-item-action"> Product Var Val</a>
					<a href="{{ url('u/pricingvarval/i') }} " class="d-flex justify-content-between list-group-item list-group-item-action"> Price Var Val</a>
					<a href="{{ url('u/promotion/i') }} " class="d-flex justify-content-between list-group-item list-group-item-action"> Promotion</a>
					<a href="{{ url('u/stockmanagement/i') }} " class="d-flex justify-content-between list-group-item list-group-item-action"> 
					Stock Management</a>
				</div> -->
			</div>
		</div>
		<div class="col">
			<h4>@yield('title')</h4>
			<div class="row">
			@yield('inputs')
			</div>
		</div>
	</div>
</div>

</main>

@component('user.components.footer')
@endcomponent

 
@endsection