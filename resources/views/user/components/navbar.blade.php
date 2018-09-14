<style type="text/css">
	.e-cart-item {
    display: block;
    width: 100%;
    padding: 0.25rem 1.5rem;
    clear: both;
    font-weight: 400;
    color: #212529;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
	}

	.navbar-expand-lg .navbar-nav .e-cart {
	    position: absolute;
	}
	.navbar-nav .e-cart {
	    position: static;
	    float: none;
	}
	.e-cart.show {
	    display: block;
	}
	.e-cart {
	    font-family: "Nunito", sans-serif;
	}
	.e-cart {
	    position: absolute;
	    top: 100%;
	    right: 0;
	    z-index: 1000;
	    display: none;
	    float: left;
	    min-width: 10rem;
	    max-width: 50vw;
	    padding: 0.5rem 0;
	    margin: 0.125rem 0 0;
	    font-size: 0.9rem;
	    color: #888;
	    text-align: left;
	    list-style: none;
	    background-clip: padding-box;
	    border: 1px solid rgba(0, 0, 0, 0.15);
	    border-radius: 0.4rem;
	}
</style>


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
      	<div>
        <button class="btn btn-secondary" data-toggle="collapse" data-target="#cart-container">
          <i class="fa fa-shopping-cart"></i> Cart
        </button>
      	</div>
      </li>
      <li class="nav-item ml-1">
        <button class="btn btn-secondary" data-toggle="modal" data-target="#form-login">
          <i class="fa fa-user"></i> Masuk
        </button>
      </li>
    </ul>

    <div id="cart-container" class="e-cart e-bg-primary collapse">
    	<table id="cart" class="table table-hover table-condensed">
				<thead>
					<tr>
						<th>Product</th>
						<th>Price</th>
						<th>Quantity</th>
						<th class="text-center">Subtotal</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td data-th="Product" align="center">
							<img src="http://placehold.it/100x100" alt="..." class="img-responsive"/>
							<h4>Product 1</h4>
						</td>
						<td data-th="Price">1,500,000</td>
						<td data-th="Quantity">
							<input type="number" class="form-control text-center" value="1">
						</td>
						<td data-th="Subtotal" class="text-center">1,500,000</td>
						<td class="actions" data-th="">
							<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
							<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
						</td>
					</tr>
				</tbody>
				<tfoot>
					<tr class="visible-xs">
						<td class="text-center"><strong>Total 1,500,000</strong></td>
					</tr>
					<tr>
						<td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
						<td colspan="2" class="hidden-xs"></td>
						<td class="hidden-xs text-center"><strong>Total Rp.1,500,000</strong></td>
						<td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
					</tr>
				</tfoot>
			</table>
    </div>
  </div>
</nav>

<!-- cart -->


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