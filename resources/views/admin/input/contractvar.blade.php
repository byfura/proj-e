@extends('admin.base.input-template')
	
@section('title', 'Contract Var')

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

	@component('admin.base.input-generate', ['inputs' => $inputs ])
	@endcomponent

@endsection

@section('addscripts')
	<script type="text/javascript">
		$('#contractvargroup').multiSelect({ keepOrder: true });
	</script>
@endsection