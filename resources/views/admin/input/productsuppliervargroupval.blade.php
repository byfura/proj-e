@extends('admin.base.input-template')
	
@section('title', 'Product Supplier Var Group Val')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Product Supplier Type Var', 'type' => 'text'],
			['name' => 'Product Supplier Type Var Group Val', 'type' => 'multiselect'],
		]
	?>

	@component('admin.base.input-generate', ['inputs' => $inputs ])
	@endcomponent

@endsection

@section('addscripts')
	<script type="text/javascript">
		$('#productsuppliertypevargroupval').multiSelect({ keepOrder: true });
	</script>
@endsection