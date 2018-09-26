@extends('admin.base.input-template')
	
@section('title', 'Currency')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Product Supplier Type', 'type' => 'text'],
			['name' => 'Product Supplier Type Var', 'type' => 'multiselect'],
		]
	?>

	@component('admin.base.input-generate', ['inputs' => $inputs ])
	@endcomponent

@endsection

@section('addscripts')
	<script type="text/javascript">
		$('#productsuppliertypevar').multiSelect({ keepOrder: true });
	</script>
@endsection