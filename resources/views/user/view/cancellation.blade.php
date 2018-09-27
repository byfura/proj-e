@extends('user.index-supplier')
	
@section('title', 'Payment')

@section('inputs')

	<div class="form-group offset-2 col-9 mt-2">
		<a class="btn btn-block btn-primary" href="{{url('s/cancellation/i')}}">Cancellation</a>
	</div>

	<?php
		$inputs = [
			['name' => 'Invoice', 'type' => 'text'],
			['name' => 'Cancellation Data', 'type' => 'text'],
		]
	?>

	@component('user.base.view-generate', ['inputs' => $inputs ])
	@endcomponent

@endsection

@section('addscripts')
@endsection