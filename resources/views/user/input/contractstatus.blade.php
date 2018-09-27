@extends('user.index-supplier')
	
@section('title', 'Contract Status')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Contract', 'type' => 'select'],
			['name' => 'Contract Status', 'type' => 'bool']
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