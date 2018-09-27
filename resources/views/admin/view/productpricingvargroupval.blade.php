@extends('admin.base.view-template')
	
@section('title', 'Product Pricing Var Group Val')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Product Pricing Var', 'type' => 'text'],
			['name' => 'Product Pricing Var Group Val', 'type' => 'multiselect'],
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