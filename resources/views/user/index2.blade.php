@extends('user.layout.base')

@section('style')
<style>
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
	.e-col {
		padding-right: 0px;
		padding-left: 5px;
		margin-bottom: 0px;
	}
	.e-col label {
		margin-bottom: 0px;
	}
	<?php $color = Helper::pastelMaker() ?>
	.e-bg-primary {
		background-color: rgb({!! $color[0] !!},{!! $color[1] !!},{!! $color[2] !!})
	}
	<?php $color = Helper::pastelMaker() ?>
	.e-bg-secondary {
		background-color: rgb({!! $color[0] !!},{!! $color[1] !!},{!! $color[2] !!})
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
	footer {
		padding-top: 25px;
		overflow: hidden;
	}
	footer ul>li {
		display: inline-block;	
	}
	footer ul>li + li:before{
    content: " | ";
    padding: 0 10px;
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
							<a href="#" class="text-secondary">Forget Password</a>
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
			<div class="col-lg-7 e-col">
				<div class="row">
					<figure class="col-lg-6 e-col">
						<img class="d-block w-100" src="https://via.placeholder.com/1000x300/aadeff?text=View+Product" alt="Trulli">
					</figure>					
					<figure class="col-lg-6 e-col">
						<img class="d-block w-100" src="https://via.placeholder.com/1000x300/aaffde?text=View+Service" alt="Trulli">
					</figure>
				</div>
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img class="d-block w-100" src="https://via.placeholder.com/1000x500/ffaaaa?text=Promo+Fasilitas+1" alt="First slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="https://via.placeholder.com/1000x500/aaffaa?text=Promo+Fasilitas+2" alt="Second slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="https://via.placeholder.com/1000x500/aaaaff?text=Promo+Fasilitas+3" alt="Third slide">
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
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
						<button type="submit" class="btn btn-success btn-block btn-lg">
							<strong>@lang('Daftar Sekarang')</strong>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<footer class="e-bg-primary">
	<div class="row">
		<div class="col-md-8">
			<ul>
				<li><a href="" class="text-secondary">Terms & Conditions</a></li>
				<li><a href="" class="text-secondary">Contact Us</a></li>
				<li><a href="" class="text-secondary">About Us</a></li>
			</ul>
		</div>
		<div class="col-md-4">
			<div class="float-right mr-4">
				Copyright &copy;2018 E-Commerce Project
			</div>
		</div>
	</div>
</footer>
	<!-- <header></header> -->

@endsection