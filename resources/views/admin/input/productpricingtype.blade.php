@extends('admin.base.input-template')
	
@section('title', 'Product Pricing Type')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Product Pricing Type', 'type' => 'text'],
		]
	?>

	@component('admin.base.input-generate', ['inputs' => $inputs ])
	@endcomponent

@endsection

@section('addscripts')
@endsection