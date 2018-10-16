@extends('admin.base.input-template')
	
@section('title', 'Product Type Var')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Product Type', 'type' => 'select'],
			['name' => 'Var Name', 'type' => 'text'],
			['name' => 'Var Cat', 'type' => 'select'],
			['name' => 'Var Type', 'type' => 'select'],
			['name' => 'Key Variable', 'type' => 'select'],
			// ['name' => 'Var Group Entity', 'type' => 'text'],
			['name' => 'Icon', 'type' => 'file'],
			['name' => 'Optional', 'type' => 'int'],
		]
	?>

	@component('admin.base.input-generate', ['inputs' => $inputs ])
	@endcomponent

@endsection

@section('addscripts')
@endsection