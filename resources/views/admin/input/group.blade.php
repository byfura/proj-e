@extends('admin.base.input-template')
	
@section('title', 'Privilege Group')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Group Name', 'type' => 'text'],
			['name' => 'Privileges', 'type' => 'multiselect'],
		]
	?>

	@component('admin.base.input-generate', ['inputs' => $inputs ])
	@endcomponent

@endsection

@section('addscripts')
	<script type="text/javascript">
		$('#privileges').multiSelect({ keepOrder: true });
	</script>
@endsection