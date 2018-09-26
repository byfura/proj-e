@extends('admin.base.view-template')
	
@section('title', 'Currency')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Code', 'type' => 'text'],
			['name' => 'Currency', 'type' => 'text'],
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