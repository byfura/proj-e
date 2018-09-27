@extends('user.index-supplier')
	
@section('title', 'Payment')

@section('inputs')

	<div class="form-group offset-2 col-9 mt-2">
		<a class="btn btn-block btn-primary" href="{{url('s/invoice/i')}}">Invoice</a>
		<a class="btn btn-block btn-primary" href="{{url('s/invoicepayment/i')}}">Invoice Payment</a>
	</div>

	<?php
		$inputs = [
			['name' => 'Invoice', 'type' => 'text'],
			['name' => 'Payment', 'type' => 'number'],
		]
	?>

	@component('user.base.view-generate', ['inputs' => $inputs ])
	@endcomponent

@endsection

@section('addscripts')
@endsection