@extends('user.index-supplier')
	
@section('title', 'Contract Var Group Val')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Contract Var', 'type' => 'select'],
			['name' => 'Contract Var Group', 'type' => 'multiselect']
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