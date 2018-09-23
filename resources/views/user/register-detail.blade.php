@extends('user.layout.clean-base')

@section('content')
	
	<div class="align-items-center e-bg-primary pb-3">

		<div class="alert alert-info text-center mb-3">
			<h4 class="alert-heading">Berhasil Terverifikasi</h4>
		  <p>Sekarang anda dapat melanjutkan mengisi informasi lanjutan atau <a class="text-warning" href="{{url('u')}}">menundanya</a></p>
		</div>

		<div class="row">
		  <div class="col">
		  </div>
		  <div class="col-lg-8 col-md-10">
		  	<div class="card">
		  		<div class="card-header e-bg-secondary text-center">
				    <h3>Info Kartu Kredit</h3>
				  </div>
		  		<div class="card-body container">
				    <form class="form-signin" action="{{url('register3')}}">
				    	<div class="row">
				    		<div class="col-md-6 col-sm-12">
							    <div class="form-group">
										<label for="i-firstname">First Name</label>
										<input type="text" class="form-control form-control-md" id="i-firstname" name="firstname" placeholder="First Name">
									</div>
								<hr/>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label for="i-surname">Surname</label>
										<input type="text" class="form-control form-control-md" id="i-surname" name="surname" placeholder="Surname">
									</div>
								<hr/>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label for="i-house">House</label>
										<input type="text" class="form-control form-control-md" id="i-house" name="house" placeholder="House">
									</div>
									<div class="form-group">
										<label for="i-street">Street</label>
										<input type="text" class="form-control form-control-md" id="i-street" name="street" placeholder="Street">
									</div>
									<div class="form-group">
										<label for="i-town">Town</label>
										<input type="text" class="form-control form-control-md" id="i-town" name="town" placeholder="Town">
									</div>
									<hr/>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label for="i-region">Region</label>
										<input type="text" class="form-control form-control-md" id="i-region" name="region" placeholder="Region">
									</div>
									<div class="form-group">
										<label for="i-country">Country</label>
										<input type="text" class="form-control form-control-md" id="i-country" name="country" placeholder="Country">
									</div>
									<div class="form-group">
										<label for="i-postcode">Post Code</label>
										<input type="text" class="form-control form-control-md" id="i-postcode" name="postcode" placeholder="Post Code">
									</div>
									<hr/>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label for="i-phone">Phone</label>
										<input type="text" class="form-control form-control-md" id="i-phone" name="phone" placeholder="Phone">
									</div>
									<div class="form-group">
										<label for="i-mobile">Mobile</label>
										<input type="text" class="form-control form-control-md" id="i-mobile" name="mobile" placeholder="Mobile">
									</div>
									<div class="form-group">
										<label for="i-fax">Fax</label>
										<input type="text" class="form-control form-control-md" id="i-fax" name="fax" placeholder="Fax">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label for="i-preference">Preference</label>
										<input type="text" class="form-control form-control-md" id="i-preference" name="preference" placeholder="Preference">
									</div>
									<div class="form-group">
										<label for="i-carregno">Carregno</label>
										<input type="text" class="form-control form-control-md" id="i-carregno" name="carregno" placeholder="Carregno">
									</div>
									<div class="form-group">
										<label for="i-alternativeemail">Alternative Email</label>
										<input type="text" class="form-control form-control-md" id="i-alternativeemail" name="alternativeemail" placeholder="Alternative Email">
									</div>
								</div>
								<div class="col-sm-12">
									<hr/>
									<div class="form-group">
										<label for="i-vatnumber">Vat Number</label>
										<input type="text" class="form-control form-control-md" id="i-vatnumber" name="vatnumber" placeholder="Vat Number">
									</div>
									<div class="form-group">
										<label for="i-vatnumbervalidated">Vat Number Validated</label>
										<input type="text" class="form-control form-control-md" id="i-vatnumbervalidated" name="vatnumbervalidated" placeholder="Vat Number Validated">
									</div>
									<div class="form-group">
										<label for="i-vatnumbervalidatedresponse">Vat Number Validated Response</label>
										<input type="text" class="form-control form-control-md" id="i-vatnumbervalidatedresponse" name="vatnumbervalidatedresponse" placeholder="Vat Number Validated Response">
									</div>
								</div>
							</div>
							<div class="form-group pt-2">
								<button type="submit" class="btn btn-success btn-block btn-lg">
									<strong>@lang('Simpan Perubahan')</strong>
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

	<div class="modal fade" id="modal-verifikasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header e-bg-primary">
	        <h5 class="modal-title" id="exampleModalLongTitle">Verifikasi Diperlukan</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        Kami sudah mengirimkan link verifikasi ke email anda.<br/>
	        Buka link tersebut untuk melanjutkan
	      </div>
	    </div>
	  </div>
	</div>

@endsection