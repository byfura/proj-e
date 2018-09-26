@extends('admin.base.view-template')
	
@section('title', 'Language')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Language', 'type' => 'text'],
		]
	?>

	@component('admin.base.view-generate', ['inputs' => $inputs ])
	@endcomponent

@endsection

