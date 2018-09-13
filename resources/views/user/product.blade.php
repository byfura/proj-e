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
</style>
@endsection

@section('content')

	<nav class="navbar navbar-expand-lg navbar-dark e-bg-primary">
    <a class="navbar-brand" href="#">Project-E</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
      <div class="input-group-append">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		      <span>Semua</span>
		    <div class="dropdown-menu e-bg-primary">
		      <a class="dropdown-item" href="#">Semua</a>
		      <div role="separator" class="dropdown-divider"></div>
		      <a class="dropdown-item" href="#">Product</a>
		      <a class="dropdown-item" href="#">Supplier</a>
		    </div>
		    </button>
        <button class="btn btn-success" type="button">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ml-1">
          <button class="btn btn-secondary">
            <i class="fa fa-shopping-cart"></i> Cart
          </button>
        </li>
        <li class="nav-item ml-1">
          <button class="btn btn-secondary" data-toggle="modal" data-target="#form-login">
            <i class="fa fa-user"></i> Masuk
          </button>
        </li>
      </ul>
    </div>
  </nav>

  <header class="e-bg-secondary">
  	<div class="row">
  		<div class="col">
  			<button class="btn btn-outline-primary">
  				<i class="fa fa-angle-left" style="margin-left: -10px;margin-right: 5;"></i> <i class="fa fa-search"></i> Advanced Search
  			</button>
  		</div>
  		<div class="col">
  			<input type="text" class="e-search-input" placeholder="Product..">
  		</div>
  		<div class="col">
  			<input type="text" class="e-search-input" placeholder="Supplier..">
  		</div>
  		<div class="col">
  			<input type="text" class="e-search-input" placeholder="Kategori/Jenis/Spek..">
  		</div>
  		<div class="col">
  			<input type="text" class="e-search-input" placeholder="Range Harga..">
  		</div>
  		<div class="form-inline col">
  			<label>List</label>
  			<button class="ml-1 btn btn-outline-primary active"><i class="fa fa-th"></i></button>
  			<button class="ml-1 btn btn-outline-primary"><i class="fa fa-th-list"></i></button>
  		</div>
  	</div>
  </header>

  <main>
  	<div class="container-fluid">
	  	<div class="row">
	  		@for ($i = 1; $i <= 12; $i++)
		  		<div class="col-md-2 e-col mb-2">
		      	<div class="card">
						  <img class="card-img-top" src="https://via.placeholder.com/500x500/aadeff?text=Product {{$i}}" alt="Card image cap">
						  <div class="card-body">
						  	<h5 class="card-title">Product {{$i}}</h5>
						  	<h5 class="card-title"><small>Supplier {{$i}}</small></h5>
						    <h3 class="card-title">Rp. {{number_format($i * rand(10000,100000))}}</h3>
						    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						    tempor incididunt ut labore et dolore magna aliqua.</p>
						  </div>
						</div>
					</div>
	      @endfor
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

  <!-- modal -->

  <div class="modal fade" id="form-login" tabindex="-1" role="dialog" aria-hidden="true">
    <form class="form-signin">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header e-bg-primary">
          <h5 class="modal-title e-bg-primary" id="exampleModalLabel">Sign In Now</h5>
          <button type="button" class="close e-bg-primary" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
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
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> -->
      </div>
    </div>
    </form>
  </div>

@endsection