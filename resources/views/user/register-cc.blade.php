@extends('user.layout.clean-base')

@section('content')
	
	<div class="align-items-center e-bg-primary pb-3">

		<div class="alert alert-info text-center mb-3">
			<h4 class="alert-heading">Data Berhasil Diupdate</h4>
		  <p>Sekarang anda dapat melanjutkan mengisi informasi kartu kredit atau <a class="text-warning" href="{{url('u')}}">menundanya</a></p>
		</div>

		<div class="row">
		  <div class="col">
		  </div>
		  <div class="col">
		  	<div class="card">
		  		<div class="card-header e-bg-secondary text-center">
				    <h3>Info CC</h3>
				  </div>
		  		<div class="card-body container">
				    <form class="form-signin" action="{{ url('u')}}">
					    <div class="form-group">
								<label for="i-ccardno">Nomer</label>
								<input type="text" class="form-control form-control-md" id="i-ccardno" name="ccardno" placeholder="Nomer">
							</div>
							<div class="form-group">
								<label for="i-ccardissued">Issued</label>
								<input type="text" class="form-control form-control-md" id="i-ccardissued" name="ccardissued" placeholder="Issued">
							</div>
							<div class="form-group">
								<label for="i-ccardexpiry">Expired</label>
								<input type="text" class="form-control form-control-md" id="i-ccardexpiry" name="ccardexpiry" placeholder="Expired">
							</div>
							<div class="form-group">
								<label for="i-ccardssno">SSNO</label>
								<input type="text" class="form-control form-control-md" id="i-ccardssno" name="ccardssno" placeholder="SSNO">
							</div>
							<div class="form-group">
								<label for="i-ccardname">Name</label>
								<input type="text" class="form-control form-control-md" id="i-ccardname" name="ccardexpiry" placeholder="Name">
							</div>
							<div class="form-group">
								<label for="i-cvv">CVV</label>
								<input type="text" class="form-control form-control-md" id="i-cvv" name="cvv" placeholder="CVV">
							</div>
							<div class="form-group">
								<label for="i-type">Type</label>
								<input type="text" class="form-control form-control-md" id="i-type" name="type" placeholder="Type">
							</div>
							<div class="form-group pt-2">
								<button type="submit" class="btn btn-success btn-block btn-lg">
									<strong>@lang('Update CC')</strong>
								</button>
							</div>
					  </form>
					</div>
				</div>
		  </div>
		  <div class="col">
		  </div>
		</div>
	</div>

@endsection