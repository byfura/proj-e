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

<div class="container">
	<div class="row">
		<div class="col-md-2 order-md-2">
			<div class="list-group">
			  <!-- <a href="#" class="d-flex justify-content-between list-group-item list-group-item-action active">
			    Status & Post
			  </a>
			  <a href="#" class="d-flex justify-content-between list-group-item list-group-item-action"><span class="fa fa-lg fa-archive"></span> Product</a>
			  <a href="#" class="d-flex justify-content-between list-group-item list-group-item-action"><span class="fa fa-lg fa-ticket-alt"></span> Coupon</a> -->
			  <a data-toggle="collapse" data-target="#c-contract" href="#" class="d-flex justify-content-between list-group-item list-group-item-action"><span class="fa fa-lg fa-list"></span> Contract <span class="fa fa-sm fa-caret-down mt-2"></span></a>
				<div id="c-contract" class="collapse">
					<a href="{{ url('s/contract') }} " class="d-flex justify-content-between list-group-item list-group-item-action"> Contract</a>
					<a href="{{ url('s/payment') }} " class="d-flex justify-content-between list-group-item list-group-item-action"> Payment</a>
					<a href="{{ url('s/cancellation') }} " class="d-flex justify-content-between list-group-item list-group-item-action"> Cancellation</a>
					<a href="{{ url('s/contractstatus/i') }} " class="d-flex justify-content-between list-group-item list-group-item-action"> Status</a>
				</div>
				<a href="{{ url('s/userrating/i') }}" class="d-flex justify-content-between list-group-item list-group-item-action"><span class="fa fa-lg fa-star"></span> User Rating</a>
			  <a data-toggle="collapse" data-target="#c-config" href="#" class="d-flex justify-content-between list-group-item list-group-item-action"><span class="fa fa-lg fa-cog"></span> Config <span class="fa fa-sm fa-caret-down mt-2"></span></a>
				<div id="c-config" class="collapse">
					<a href="{{ url('s/productsupplier/i') }} " class="d-flex justify-content-between list-group-item list-group-item-action"> Supplier</a>
					<a href="{{ url('s/productsuppliertype/i') }} " class="d-flex justify-content-between list-group-item list-group-item-action"> Supplier Type</a>
					<a href="{{ url('s/productsuppliervarval/i') }} " class="d-flex justify-content-between list-group-item list-group-item-action"> Variable Value</a>
				</div>
				<a data-toggle="collapse" data-target="#c-product" href="#" class="d-flex justify-content-between list-group-item list-group-item-action"><span class="fa fa-lg fa-archive"></span> Product <span class="fa fa-sm fa-caret-down mt-2"></span></a>
				<div id="c-product" class="collapse">
					<a href="{{ url('s/product/i') }} " class="d-flex justify-content-between list-group-item list-group-item-action"> Product</a>
					<a href="{{ url('s/producttype/i') }} " class="d-flex justify-content-between list-group-item list-group-item-action"> Product Type</a>
					<a href="{{ url('s/productvarval/i') }} " class="d-flex justify-content-between list-group-item list-group-item-action"> Product Var Val</a>
					<a href="{{ url('s/pricingvarval/i') }} " class="d-flex justify-content-between list-group-item list-group-item-action"> Price Var Val</a>
					<a href="{{ url('s/promotion/i') }} " class="d-flex justify-content-between list-group-item list-group-item-action"> Promotion</a>
					<a href="{{ url('s/stockmanagement/i') }} " class="d-flex justify-content-between list-group-item list-group-item-action"> 
					Stock Management</a>
				</div>
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