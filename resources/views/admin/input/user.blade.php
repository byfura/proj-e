@extends('admin.base.input-template')
	
@section('title', 'User Group')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'User ID', 'type' => 'select'],
			['name' => 'Group Name', 'type' => 'select'],
		]
	?>

	@component('admin.base.input-generate', ['inputs' => $inputs ])
	@endcomponent

@endsection

@section('addscripts')
@endsection