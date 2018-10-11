@extends('user.layout.base')

@section('style')
<style>
	body {
		overflow-y: scroll;
	}
	header,footer {
		padding: 0.5rem 0;
		font-weight: bolder;
		padding-bottom: 5px;
		color: #888888;
	}
	header h3 {
		margin-left: 2rem;
		margin-top: 1.2rem;
	}
	main .e-col {
		padding-right: 0px;
		padding-left: 0px;
		margin-bottom: 0px;
	}
	main label {
		color: gray;
		font-size: large;
	}
	main h1 {
		color: gray;
	}
	main .form-group {
		margin-bottom: 8px;
	}
	h1 small {
		font-size: medium;
	}
</style>
@endsection

@section('content')
	<!-- <topbar></topbar> -->
<header class="e-bg-primary">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-8">
				<h3>Project-E</h3>
			</div>
			<div class="col-lg-4">
				<form class="row">
					<div class="form-group col-md-5 e-col">
						<label>Username / Email
							<input type="text" class="form-control form-control-sm" placeholder="Username">
						</label>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="remember-me">
						  <label class="form-check-label" for="remember-me">
						    Remember Me
						  </label>
						</div>
					</div>
					<div class="form-group col-md-5 e-col">
						<label>Password
							<input type="password" class="form-control form-control-sm" placeholder="Password">
						</label>
						<div class="">
							<a href="{{url('forgot-password')}}" class="text-secondary">Forget Password</a>
						</div>
					</div>
					<div class="form-group col-md-2 e-col">
						<br>
						<button type="submit" class="btn btn-sm btn-secondary">Sign In</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</header>
<main>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-7 pt-2">
				<button class="btn btn-lg btn-block btn-info">Tombol Search</button>
				<button class="btn btn-lg btn-block btn-info">Tombol Listing</button>
				<button class="btn btn-lg btn-block btn-info">Informasi Fasilitas</button>
			</div>
			<div class="col-lg-5 e-col e-bg-secondary pt-3 pl-2 pr-2">
				<h1 class="text-center">
					<strong>@lang('Daftar Sekarang')</strong><br/>
					<small>@lang('Dapatkan Fasilitasnya')</small>
				</h1>
				<div class="container">
					<div class="form-group">
						<label for="i-username">Username</label>
						<input type="text" class="form-control" id="i-username" name="username" placeholder="Username">
					</div>
					<div class="form-group">
						<label for="i-email">Email</label>
						<input type="email" class="form-control" id="i-email" name="email" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="i-password">Password</label>
						<input type="password" class="form-control" id="i-password" name="password" placeholder="Password">
					</div>
					<div class="form-group">
						<label for="i-confirmpassword">Confirm Password</label>
						<input type="password" class="form-control" id="i-confirmpassword" name="confirmpassword" placeholder="Confirm Password">
					</div>
					<div class="form-group">
						<label for="i-name">Nama</label>
						<input type="text" class="form-control" id="i-name" name="name" placeholder="Nama Anda">
					</div>
					<div class="form-group pt-2">
						<button type="submit" class="btn btn-success btn-block btn-lg" data-toggle="modal" data-target="#modal-verifikasi">
							<strong>@lang('Daftar Sekarang')</strong>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

@component('user.components.footer')
@endcomponent

<!-- Modal -->
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

@section('script')
	
<script type="text/javascript">
	
</script>

@endsection