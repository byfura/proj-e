@extends('admin.base.input-template')
	
@section('title', 'Product Supplier Type')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Product Supplier Type', 'type' => 'text'],
		]
	?>

	@component('admin.base.input-generate', ['inputs' => $inputs ])
	@endcomponent

@endsection

@section('addscripts')
@endsection