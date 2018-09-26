@extends('admin.base.view-template')
	
@section('title', 'Currency')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Supplier', 'type' => 'select'],
			['name' => 'Contract Var Group', 'type' => 'multiselect'],
			['name' => 'Contract Var', 'type' => 'text'],
			['name' => 'Contract Var Type', 'type' => 'text'],
			['name' => 'Contract Var Cat', 'type' => 'text'],
			['name' => 'Icon', 'type' => 'text'],
			['name' => 'Optional', 'type' => 'text'],
		]
	?>

	@component('admin.base.view-generate', ['inputs' => $inputs ])
	@endcomponent

@endsection

@section('addscripts')
	<script type="text/javascript">
		$('#li-contract').addClass('open');
	</script>
@endsection