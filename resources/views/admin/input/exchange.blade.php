@extends('admin.base.input-template')
	
@section('title', 'Exchange Rate')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Currency From', 'type' => 'select'],
			['name' => 'Currency To', 'type' => 'select'],
			['name' => 'Rate', 'type' => 'text'],
		]
	?>

	@component('admin.base.input-generate', ['inputs' => $inputs ])
	@endcomponent

@endsection