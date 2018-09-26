@extends('admin.base.view-template')
	
@section('title', 'Privilege')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Privilege', 'type' => 'text'],
			['name' => 'Access', 'type' => 'select'],
		]
	?>


	@component('admin.base.view-generate', ['inputs' => $inputs ])
	@endcomponent

@endsection

@section('addscripts')
	<script type="text/javascript">
		$('#li-user').addClass('open');
	</script>
@endsection