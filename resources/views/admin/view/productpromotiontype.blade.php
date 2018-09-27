@extends('admin.base.view-template')
	
@section('title', 'Product Promotion Type')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Product Promotion Type', 'type' => 'text'],
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