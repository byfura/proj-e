@extends('admin.base.input-template')
	
@section('title', 'Currency')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Contract Var Group', 'type' => 'text'],
		]
	?>

	@component('admin.base.input-generate', ['inputs' => $inputs ])
	@endcomponent

@endsection