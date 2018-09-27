@extends('admin.base.view-template')
	
@section('title', 'Product Pricing Type Var')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Product Pricing Type', 'type' => 'select'],
			['name' => 'Var Name', 'type' => 'text'],
			['name' => 'Var Cat', 'type' => 'int'],
			['name' => 'Var Type', 'type' => 'int'],
			['name' => 'Key Variable', 'type' => 'int'],
			['name' => 'Icon', 'type' => 'file'],
			['name' => 'Optional', 'type' => 'int'],
		]
	?>


	@component('admin.base.view-generate', ['inputs' => $inputs ])
	@endcomponent

@endsection

@section('addscripts')
	<script type="text/javascript">
		$('#li-pricing').addClass('open');
	</script>
@endsection