@extends('admin.base.view-template')
	
@section('title', 'User Group')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'User ID', 'type' => 'select'],
			['name' => 'Group Name', 'type' => 'select'],
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