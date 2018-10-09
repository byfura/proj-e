@extends('admin.base.view-template')
	
@section('title', 'Group Privileges')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Group Name', 'type' => 'text'],
			['name' => 'List Users', 'type' => 'modal', 'popup' => 'groupuser'],
			['name' => 'List Privileges', 'type' => 'modal', 'popup' => 'grouppriv'],
		]
	?>

	@component('admin.base.view-generate', ['inputs' => $inputs ])
	@endcomponent

	<?php
		$inputs = [
			['name' => 'Users', 'type' => 'text-readonly'],
		]
	?>

	@component('admin.base.custom-modal', ['id' => 'groupuser', 'title' => 'List Users' ])
		@component('admin.base.view-generate', ['inputs' => $inputs, 'noaction' => 1 ])
		@endcomponent
	@endcomponent

	<?php
		$inputs = [
			['name' => 'Privileges', 'type' => 'text-readonly'],
		]
	?>

	@component('admin.base.custom-modal', ['id' => 'grouppriv', 'title' => 'List Privileges' ])
		@component('admin.base.view-generate', ['inputs' => $inputs, 'noaction' => 1 ])
		@endcomponent
	@endcomponent

@endsection

@section('addscripts')
@endsection