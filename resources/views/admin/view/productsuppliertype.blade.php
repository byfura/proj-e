@extends('admin.base.view-template')
	
@section('title', 'Product Supplier Type')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Product Supplier Type', 'type' => 'text'],
		]
	?>


	@component('admin.base.view-generate', ['inputs' => $inputs ])
	@endcomponent

@endsection

@section('addscripts')
	<script type="text/javascript">
		$('#li-supplier').addClass('open');
	</script>
@endsection