<nav class="navbar navbar-expand-lg navbar-dark e-bg-primary">
  <a class="navbar-brand" href="{{url('/')}}">Project-E</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="input-group">
  @if (!isset($searchbar) || $searchbar)
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
  @endif
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
	    	@if (!isset($user))
	    		@if (!isset($_GET['verified']))
		      <div class="btn-group">
					  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <i class="fa fa-user-times"></i> Guest <span class="badge badge-secondary">40</span>
					  </button>
					  <div class="dropdown-menu e-bg-primary">
					  	<a class="dropdown-item" href="#" data-toggle="modal" data-target="#form-verify"><i class="mr-2 fa fa-check"></i> Verify</a>
					  	<div class="dropdown-divider"></div>
					    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#form-login"><i class="mr-2 fa fa-user-check"></i>Log In</a>
					    <a class="dropdown-item" href="{{ url('register') }}"><i class="mr-2 fa fa-file-signature"></i>Register</a>
					  </div>
					</div>
					@else
					<div class="btn-group">
					  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <i class="fa fa-user-times"></i> Guest <span class="badge badge-secondary">40</span>
					  </button>
					  <div class="dropdown-menu e-bg-primary">
					    <a class="dropdown-item" href="#"><i class="mr-2 fa fa-comment"></i> Chat</a>
					    <a class="dropdown-item" href="#"><i class="mr-2 fa fa-phone"></i> Call</a>
					    <div class="dropdown-divider"></div>
					  	<a class="dropdown-item" href="#"><span class="mr-1 h5">40</span> Points</a>
					  	<a class="dropdown-item" href="#"><i class="mr-2 fa fa-cog"></i> Settings</a>
					    <div class="dropdown-divider"></div>
					    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#form-login"><i class="mr-2 fa fa-user-check"></i>Log In</a>
					    <a class="dropdown-item" href="{{ url('register') }}"><i class="mr-2 fa fa-file-signature"></i>Register</a>
					  </div>
					</div>
					@endif
	      @else
	      <div class="btn-group">
				  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    <i class="fa fa-user"></i> {{ $user }} <span class="badge badge-secondary">40</span>
				  </button>
				  <div class="dropdown-menu e-bg-primary">
				  	<a class="dropdown-item" href="#"><i class="mr-2 fa fa-plus-square"></i> New Status</a>
				  	<div class="dropdown-divider"></div>
				  	<a class="dropdown-item" href="#"><i class="mr-2 fa fa-user-friends"></i> Friends</a>
				  	<a class="dropdown-item" href="#"><i class="mr-2 fa fa-users"></i> Association</a>
				    <a class="dropdown-item" href="#"><i class="mr-2 fa fa-comment"></i> Chat</a>
				    <a class="dropdown-item" href="#"><i class="mr-2 fa fa-phone"></i> Call</a>
				    <div class="dropdown-divider"></div>
				  	<a class="dropdown-item" href="#"><span class="mr-1 h5">40</span> Points</a>
				    <a class="dropdown-item" href="#"><i class="mr-2 fa fa-cog"></i> Settings</a>
				    <div class="dropdown-divider"></div>
				    <a class="dropdown-item" href="#"><i class="mr-2 fa fa-door-open"></i>Log Out</a>
				  </div>
				</div>
	      @endif
	    </li>
	  </ul>
  @component('user.components.cart')
  @endcomponent
	</div>
</nav>

@component('user.components.login-modal')
@endcomponent

@component('user.components.custom-modal',['id'=>'form-verify', 'title'=>'Verify Email'])
	<p class="px-2">Harap verifikasi email sebelum menggunakan fasilias sebagai Guest!</p>
	<div class="form-group d-flex">
		<input class="form-control mr-2" type="email" name="email" placeholder="Email Address">
		<button class="btn btn-secondary" onclick="window.location.href= '?verified' ">Verify</button>
	</div>
@endcomponent

@component('user.components.custom-modal',['id'=>'form-chat', 'title'=>'Chat'])
	<div class="form-group d-flex">
		<input class="form-control mr-2" type="text" name="message" placeholder="Search Message...">
	</div>
	<div class="list-group">
	</div>
	<div class="form-group d-flex">
		<input class="form-control mr-2" type="email" name="email" placeholder="Email Address">
		<button class="btn btn-secondary" onclick="window.location.href= '?verified' ">Verify</button>
	</div>
@endcomponent