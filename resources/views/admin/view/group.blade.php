@extends('admin.base.view-template')
	
@section('title', 'Privilege Group')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Group Name', 'type' => 'text'],
			['name' => 'Privileges', 'type' => 'multiselect'],
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