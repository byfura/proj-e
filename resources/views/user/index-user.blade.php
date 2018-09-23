@extends('user.layout.base')

@section('style')
<style type="text/css">
	.input-group-append .dropdown-toggle {
		border-radius: 0;
	}
	header {
		padding: 0.5rem 0.25rem;
		border-bottom: 1px #ddd solid ;

		overflow: hidden;
	}
	main {
		padding-top: 1rem;
	}
	h5.card-title {
		margin-bottom: 0.1rem;
	}
</style>
@endsection

@section('content')

@component('user.components.navbar', ['searchbar' => false, 'user' => 'User-Test'])
@endcomponent

<main>

<div class="container" style="padding: 25% 25%">
	<h1>Konten Status</h1>
</div>

</main>

@component('user.components.footer')
@endcomponent

 
@endsection