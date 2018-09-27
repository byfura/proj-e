@extends('admin.base.input-template')
	
@section('title', 'Product Pricing Type Var')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Product Pricing Type', 'type' => 'select'],
			['name' => 'Var Name', 'type' => 'text'],
			['name' => 'Var Cat', 'type' => 'int'],
			['name' => 'Var Type', 'type' => 'int'],
			['name' => 'Key Variable', 'type' => 'int'],
			['name' => 'Icon', 'type' => 'file'],
			['name' => 'Optional', 'type' => 'int'],
		]
	?>

	@component('admin.base.input-generate', ['inputs' => $inputs ])
	@endcomponent

@endsection

@section('addscripts')
@endsection