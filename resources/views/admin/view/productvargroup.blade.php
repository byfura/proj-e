@extends('admin.base.view-template')
	
@section('title', 'Product Var Group')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Product Var Group', 'type' => 'text'],
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