@extends('admin.base.input-template')
	
@section('title', 'Currency')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Payment Type', 'type' => 'text'],
		]
	?>

	@component('admin.base.input-generate', ['inputs' => $inputs ])
	@endcomponent

@endsection