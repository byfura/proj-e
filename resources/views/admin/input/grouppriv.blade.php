@extends('admin.base.input-template')
	
@section('title', 'Group Privileges')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Group Name', 'type' => 'text'],
			['name' => 'Users', 'type' => 'multiselect'],
			['name' => 'Privileges', 'type' => 'multiselect'],
		]
	?>

	@component('admin.base.input-generate', ['inputs' => $inputs ])
	@endcomponent

@endsection

@section('addscripts')
	<script type="text/javascript">
		$('#privileges').multiSelect({ keepOrder: true });
		$('#users').multiSelect({ keepOrder: true });
	</script>
@endsection