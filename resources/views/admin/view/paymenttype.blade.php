@extends('admin.base.view-template')
	
@section('title', 'Currency')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Payment Type', 'type' => 'text'],
		]
	?>

	@component('admin.base.view-generate', ['inputs' => $inputs ])
	@endcomponent

@endsection