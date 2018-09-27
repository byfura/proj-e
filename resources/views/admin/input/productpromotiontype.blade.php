@extends('admin.base.input-template')
	
@section('title', 'Product Promotion Type')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Product Promotion Type', 'type' => 'text'],
		]
	?>

	@component('admin.base.input-generate', ['inputs' => $inputs ])
	@endcomponent

@endsection

@section('addscripts')
@endsection