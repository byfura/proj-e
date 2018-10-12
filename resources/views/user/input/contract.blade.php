@extends('user.index-supplier')
	
@section('title', 'COntract')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Currency', 'type' => 'select'],
			['name' => 'Booking', 'type' => 'select'],
			['name' => 'Contract Var', 'type' => 'inputs'],
			['name' => 'Discount', 'type' => 'int'],
			['name' => 'Discount Detail', 'type' => 'text'],
			['name' => 'Tax', 'type' => 'int'],
			['name' => 'Coupon', 'type' => 'text'],
			['name' => 'Contract Total', 'type' => 'text'],
			['name' => 'Timestamp', 'type' => 'text'],
			['name' => 'Deposit Required', 'type' => 'text'],
			['name' => 'Deposit Paid', 'type' => 'text'],
			['name' => 'Deposit Reference', 'type' => 'text'],
			['name' => 'Special Requirement', 'type' => 'text'],
			['name' => 'News Letter', 'type' => 'text'],
			['name' => 'Invoice ID', 'type' => 'text'],
			['name' => 'Invoice Payment ID', 'type' => 'text'],
			['name' => 'Cancellation ID', 'type' => 'text'],
			['name' => 'Courier ID', 'type' => 'text'],
			['name' => 'Expected Delivery Date', 'type' => 'text'],
			['name' => 'Delivered Date', 'type' => 'text'],
		]
	?>

	@component('user.base.input-generate', ['inputs' => $inputs ])
	@endcomponent

	<div class="form-group offset-2 col-9 mt-2">
		<button class="btn btn-block btn-primary">Submit</button>
	</div>

@endsection

@section('addscripts')
	<script type="text/javascript">
		$('#contractvargroup').multiSelect({ keepOrder: true });
	</script>
@endsection