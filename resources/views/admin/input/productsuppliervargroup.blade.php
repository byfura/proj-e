@extends('admin.base.input-template')
	
@section('title', 'Product Supplier Var Group')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Product Supplier Var Group', 'type' => 'text'],
		]
	?>

	@component('admin.base.input-generate', ['inputs' => $inputs ])
	@endcomponent

@endsection

@section('addscripts')
@endsection