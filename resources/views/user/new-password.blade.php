@extends('user.layout.clean-base')

@section('content')

	<div class="h-100 row align-items-center e-bg-primary">
	  <div class="col">
	  </div>
	  <div class="col">
	  	<div class="card">
	  		<div class="card-header e-bg-secondary text-center">
			    <h3>New Password</h3>
			  </div>
	  		<div class="card-body container">
			    <form class="form-signin">
						<div class="form-group">
							<label for="i-password">New Password</label>
							<input type="password" class="form-control form-control-md" id="i-password" name="password" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="i-repassword">Confirm Password</label>
							<input type="password" class="form-control form-control-md" id="i-repassword" name="repassword" placeholder="Email">
						</div>
						<div class="form-group pt-2">
							<button type="button" class="btn btn-success btn-block btn-lg" data-toggle="modal" data-target="#modal-verifikasi">
								<strong>@lang('Ganti Password')</strong>
							</button>
						</div>
				  </form>
				</div>
			</div>
	  </div>
	  <div class="col">
	  </div>
	</div>

	<div class="modal fade" id="modal-verifikasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header e-bg-primary">
	        <h5 class="modal-title" id="exampleModalLongTitle">Password Baru Terkirim</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        Kami sudah mengirimkan password baru ke password anda.
	      </div>
	    </div>
	  </div>
	</div>

@endsection