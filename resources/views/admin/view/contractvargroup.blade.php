@extends('admin.base.view-template')
	
@section('title', 'Currency')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Contract Var Group', 'type' => 'multiselect'],
		]
	?>

	@component('admin.base.view-generate', ['inputs' => $inputs ])
	@endcomponent

@endsection

@section('addscripts')
	<script type="text/javascript">
		$('#li-contract').addClass('open');
	</script>
@endsection