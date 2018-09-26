@extends('admin.base.view-template')
	
@section('title', 'Exchange Rate')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Currency From', 'type' => 'select'],
			['name' => 'Currency To', 'type' => 'select'],
			['name' => 'Rate', 'type' => 'text'],
		]
	?>

	@component('admin.base.view-generate', ['inputs' => $inputs ])
	@endcomponent

@endsection

@section('addscripts')
	<script type="text/javascript">
		$('#li-currency').addClass('open');
	</script>
@endsection