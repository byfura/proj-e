@extends('user.index-supplier')
	
@section('title', 'Coupon')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Contract Invoice', 'type' => 'select'],
			['name' => 'Cancellation Date', 'type' => 'date'],
			['name' => 'Cancellation Reason', 'type' => 'text'],
			['name' => 'Cancellation Fee', 'type' => 'int'],
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