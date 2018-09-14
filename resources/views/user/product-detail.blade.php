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
	.e-search-input {
	  display:block;
	  border:none;
	  padding: 0.25rem;
	  margin-top: 0.25rem;
	  width: 100%;
	  background-color: rgba(255,255,255,0.4);
	  border-bottom:  1px #ddd solid ;
	}
	.e-search-input:focus 		{ outline:none; }

	.stars {
		font-size: 10px;
	}

	.card {
		margin: 1rem 1rem;
	}

	.card .row {
		margin-left: 0;
		margin-right: 0;
	}

	.card .row .col {
		padding: 1rem;
		min-height: 80vh;
		border-radius: 0.4rem;
	}
</style>
@endsection

@section('content')

@component('user.components.navbar')
@endcomponent

	<div class="container-fluid">
		<div class="card">
			<div class="row">
				<div class="col col-md-3">
					<img class="w-100" src="https://via.placeholder.com/500x500/aadeff?text=Product X" alt="Card image cap">
				</div>
				<div class="col col-md-6">
					<h3 class="card-title">Product X</h3>
					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<h5 class="card-text">Spesifikasi</h5>
					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="col col-md-3 bg-light">
					<h2 class="card-title text-right"><small>Rp.</small> <b>1,000,000</b><small>/pcs</small></h2>
					<table class="table">
						<tr class="form-group">
							<th>Jumlah</th>
							<td><input type="number" class="form-control form-control-sm" value="1"></td>
						</tr>
						<tr class="form-group">
							<th>Warna</th>
							<td><input type="number" class="form-control form-control-sm" value="1"></td>
						</tr>
						<tr class="form-group">
							<th>Size</th>
							<td><input type="number" class="form-control form-control-sm" value="1"></td>
						</tr>
						<tr class="form-group">
							<th>Kurir</th>
							<td><input type="number" class="form-control form-control-sm" value="1"></td>
						</tr>
						<tr class="form-group">
							<th></th>
							<th><input type="text" readonly class="form-control form-control-sm" value="1"></th>
						</tr>
					</table>
					<div class="form-group">
						<button class="btn btn-lg btn-block btn-success">BELI SEKARANG</button>
						<button class="btn btn-block btn-info">Chat Supplier</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	@component('user.components.footer')
  @endcomponent

@endsection