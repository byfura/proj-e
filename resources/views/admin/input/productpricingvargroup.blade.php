@extends('admin.base.input-template')
	
@section('title', 'Product Pricing Var Group')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Product Pricing Var Group', 'type' => 'text'],
		]
	?>

	@component('admin.base.input-generate', ['inputs' => $inputs ])
	@endcomponent

@endsection

@section('addscripts')
@endsection