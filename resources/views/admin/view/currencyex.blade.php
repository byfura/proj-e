@extends('admin.base.view-template')
	
@section('title', 'Currency')

@section('inputs')

	<?php
		$inputs = [
			['name' => 'Code', 'type' => 'text'],
			['name' => 'Currency', 'type' => 'text'],
			['name' => 'Exchange Rate', 'type' => 'modal', 'popup' => 'exchangerate'],
		]
	?>

	@component('admin.base.view-generate', ['inputs' => $inputs ])
	@endcomponent

	<?php
		$inputs = [
			['name' => 'To', 'type' => 'text-readonly'],
			['name' => 'Exchange Rate', 'type' => 'int'],
		]
	?>

	@component('admin.base.custom-modal', ['id' => 'exchangerate', 'title' => 'Exchange Rate' ])
		@component('admin.base.view-generate', ['inputs' => $inputs, 'nodelete' => 1, 'popup' => 'exchangeratei' ])
		@endcomponent
	@endcomponent

	@component('admin.base.custom-modal', ['id' => 'exchangeratei', 'title' => 'Exchange Rate - X' ])
		@component('admin.base.input-generate', ['inputs' => $inputs])
		@endcomponent
	  <div class="form-group row">
	    <button class="btn btn-info pull-right">Submit</button>
	  </div>
	@endcomponent

@endsection

@section('addscripts')
@endsection