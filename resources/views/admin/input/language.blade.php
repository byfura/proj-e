@extends('admin.base.input-template')
	
@section('title', 'Language')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Language', 'type' => 'text'],
		]
	?>

	@component('admin.base.input-generate', ['inputs' => $inputs ])
	@endcomponent

@endsection