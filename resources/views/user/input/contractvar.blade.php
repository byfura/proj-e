@extends('user.index-supplier')
	
@section('title', 'Contract Var')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Supplier', 'type' => 'select'],
			['name' => 'Contract Var Group', 'type' => 'multiselect'],
			['name' => 'Contract Var', 'type' => 'text'],
			['name' => 'Contract Var Type', 'type' => 'text'],
			['name' => 'Contract Var Cat', 'type' => 'text'],
			['name' => 'Icon', 'type' => 'text'],
			['name' => 'Optional', 'type' => 'text'],
		]
	?>

	@component('user.base.input-generate', ['inputs' => $inputs ])
	@endcomponent

	<div class="form-group offset-2 col-9 mt-2">
		<button class="btn btn-block btn-primary">Submit</button>
	</div>

@endsection

@section('addscripts')
	<script type="text/javascript">
		$('#contractvargroup').multiSelect({ keepOrder: true });
	</script>
@endsection