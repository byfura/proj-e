@extends('admin.base.view-template')
	
@section('title', 'Product Supplier Var Group')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Product Supplier Var Group', 'type' => 'text'],
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