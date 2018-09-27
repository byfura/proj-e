@extends('admin.base.view-template')
	
@section('title', 'Product Type')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Product Type', 'type' => 'text'],
			['name' => 'Product Supplier Type', 'type' => 'select'],
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