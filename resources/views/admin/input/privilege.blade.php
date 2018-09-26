@extends('admin.base.input-template')
	
@section('title', 'Privilege')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Privilege', 'type' => 'text'],
			['name' => 'Access', 'type' => 'select'],
		]
	?>

	@component('admin.base.input-generate', ['inputs' => $inputs ])
	@endcomponent

@endsection