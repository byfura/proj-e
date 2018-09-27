@extends('user.index-supplier')
	
@section('title', 'Contract')

@section('inputs')

	<div class="form-group offset-2 col-9 mt-2">
		<a class="btn btn-block btn-primary" href="{{url('s/contractvar/i')}}">Contract Var</a>
		<a class="btn btn-block btn-primary" href="{{url('s/contractvargroupval/i')}}">Contract Var Group Val</a>
		<a class="btn btn-block btn-primary" href="{{url('s/contractvarval/i')}}">Contract Var Val</a>
	</div>

	<?php
		$inputs = [
			['name' => 'Contract', 'type' => 'text'],
		]
	?>

	@component('user.base.view-generate', ['inputs' => $inputs ])
	@endcomponent

@endsection

@section('addscripts')
@endsection