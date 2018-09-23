@extends('user.layout.clean-base')

@section('content')

	<div class="h-100 row align-items-center e-bg-primary">
	  <div class="col">
	  </div>
	  <div class="col">
	  	<div class="card">
	  		<div class="card-header e-bg-secondary text-center">
			    <h3>Login</h3>
			  </div>
	  		<div class="card-body container">
			    <form class="form-signin">
				    <div class="form-group">
					    <label for="inputEmail">Email address</label>
					    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
				  	</div>
				  	<div class="form-group">
					    <label for="inputPassword">Password</label>
					    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
					  </div>
				    <div class="checkbox mb-3">
				      <label>
				        <input type="checkbox" value="remember-me"> Remember me
				      </label>
				    </div>
				    <hr class="mt-4 mb-3">
				    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
				    <button class="btn btn-lg btn-info btn-block" type="submit">Register</button>
				    <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p> -->
				  </form>
				</div>
			</div>
	  </div>
	  <div class="col">
	  </div>
	</div>

@endsection