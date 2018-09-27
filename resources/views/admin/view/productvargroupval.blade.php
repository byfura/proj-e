@extends('admin.base.view-template')
	
@section('title', 'Product Var Group Val')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Product Type Var', 'type' => 'text'],
			['name' => 'Product Type Var Group Val', 'type' => 'multiselect'],
		]
	?>


	@component('admin.base.view-generate', ['inputs' => $inputs ])
	@endcomponent

@endsection

@section('addscripts')
	<script type="text/javascript">
		$('#li-product').addClass('open');
	</script>
@endsection