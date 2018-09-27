@extends('admin.base.input-template')
	
@section('title', 'Product Var Group Val')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Product Type Var', 'type' => 'text'],
			['name' => 'Product Type Var Group Val', 'type' => 'multiselect'],
		]
	?>

	@component('admin.base.input-generate', ['inputs' => $inputs ])
	@endcomponent

@endsection

@section('addscripts')
	<script type="text/javascript">
		$('#producttypevargroupval').multiSelect({ keepOrder: true });
	</script>
@endsection