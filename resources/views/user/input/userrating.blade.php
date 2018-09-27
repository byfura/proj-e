@extends('user.index-supplier')
	
@section('title', 'Contract Var')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'User', 'type' => 'select'],
			['name' => 'Rating', 'type' => 'int'],
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