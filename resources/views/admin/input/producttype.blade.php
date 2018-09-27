@extends('admin.base.input-template')
	
@section('title', 'Product Type')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Product Type', 'type' => 'text'],
			['name' => 'Product Supplier Type', 'type' => 'select'],
		]
	?>

	@component('admin.base.input-generate', ['inputs' => $inputs ])
	@endcomponent

@endsection

@section('addscripts')
@endsection