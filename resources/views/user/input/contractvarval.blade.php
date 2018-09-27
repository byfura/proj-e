@extends('user.index-supplier')
	
@section('title', 'Contract Var Val')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Contract ', 'type' => 'select'],
			['name' => 'Contract Var', 'type' => 'multiselect'],
			['name' => 'Boolean Value', 'type' => 'text'],
			['name' => 'Number Value', 'type' => 'text'],
			['name' => 'Text Value', 'type' => 'text'],
			['name' => 'Image Value', 'type' => 'text'],
			['name' => 'Date Time Value', 'type' => 'text'],		
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