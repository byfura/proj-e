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
	    	<div class="btn-group">
				  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    <i class="fa fa-user"></i> User <span class="badge badge-secondary">40</span>
				  </button>
				  <div class="dropdown-menu e-bg-primary" style="left: -150; width: 300px;">
				    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#form-setting"><i class="mr-2 fa fa-cog"></i> Edit User View</a>
				  	<a class="dropdown-item" href="#" data-toggle="modal" data-target="#form-status"><i class="mr-2 fa fa-plus-square"></i> Status Update</a>
				  	<div class="dropdown-divider"></div>
				    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#form-chat"><i class="mr-2 fa fa-comment"></i> Chat</a>
				    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#form-call"><i class="mr-2 fa fa-phone"></i> Call</a>
				    <div class="dropdown-divider"></div>
				  	<a class="dropdown-item" href="#" data-toggle="modal" data-target="#form-friend"><i class="mr-2 fa fa-user-friends"></i> Friends & Assoc</a>
				  	<a class="dropdown-item" href="#" data-toggle="modal" data-target="#form-assoc"><i class="mr-2 fa fa-users"></i> Add Friend</a>
				  	<a class="dropdown-item" href="#" data-toggle="modal" data-target="#form-assoc"><i class="mr-2 fa fa-users"></i> Add Assoc</a>
				  	<a class="dropdown-item" href="#" data-toggle="modal" data-target="#form-assoc"><i class="mr-2 fa fa-users"></i> Show Friend & Assoc</a>
				  	<a class="dropdown-item" href="#" data-toggle="modal" data-target="#form-assoc"><i class="mr-2 fa fa-users"></i> Starred Friend</a>
				  	<a class="dropdown-item" href="#" data-toggle="modal" data-target="#form-assoc"><i class="mr-2 fa fa-users"></i> Starred Assoc</a>
				  	<!-- <a class="dropdown-item" href="#"><span class="mr-1 h5">40</span> Points</a>
				    <div class="dropdown-divider"></div>
				    <a class="dropdown-item" href="#"><i class="mr-2 fa fa-door-open"></i>Log Out</a> -->
				  </div>
				</div>
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
	<button class="btn btn-info btn-block">View Starred Messages</button>
	<button class="btn btn-info btn-block">Search Message</button>
	<button class="btn btn-info btn-block">Create Group</button>
@endcomponent

@component('user.components.custom-modal',['id'=>'form-call', 'title'=>'Call'])
	<button class="btn btn-info btn-block">Clear Call Log</button>
	<button class="btn btn-info btn-block">Search Call Log</button>
@endcomponent

@component('user.components.custom-modal',['id'=>'form-status', 'title'=>'Status'])
	<button class="btn btn-info btn-block">Add Post</button>
	<button class="btn btn-info btn-block">User Status Update</button>
	<button class="btn btn-info btn-block">View Hidden Status Update</button>
@endcomponent

@component('user.components.custom-modal',['id'=>'form-friend', 'title'=>'Friend'])
	<div class="form-group d-flex justify-content-between">
		<input class="form-control form-control-sm mr-2" type="text" name="message" placeholder="Search Friend...">
		<div class="d-flex justify-content-between align-items-center">
			<input type="checkbox" name="starred" id="i-starred-friend">
			<label for="i-starred-friend"><span class="fa fa-star fa-lg text-warning"></span></label>
		</div>
	</div>
	<ul class="list-group mx-5">
  	@for($i = 1; $i <= 6; $i++)
    <li class="list-group-item p-1">
    	<div class="d-flex justify-content-between">
      	<h6 class="my-0">User {{$i}} <small><span class="fa fa-star text-warning"></span></small></h6>
      	<div class="d-flex justify-content-between">
	      	<button class="btn btn-sm btn-success ml-2"><span class="fa fa-comment"></span> Chat</button>
	      	<button class="btn btn-sm btn-success ml-2"><span class="fa fa-phone"></span> Call</button>
	    	</div>
    	</div>
    </li>
    @endfor
  </ul>
	<div class="form-group d-flex mt-2">
		<button class="btn btn-secondary btn-block">Add Friend</button>
	</div>
@endcomponent

@component('user.components.custom-modal',['id'=>'form-assoc', 'title'=>'Association'])
	<div class="form-group d-flex justify-content-between">
		<input class="form-control form-control-sm mr-2" type="text" name="message" placeholder="Search Association...">
		<div class="d-flex justify-content-between align-items-center">
			<input type="checkbox" name="starred" id="i-starred-assoc">
			<label for="i-starred-assoc"><span class="fa fa-star fa-lg text-warning"></span></label>
		</div>
	</div>
	<ul class="list-group">
  	@for($i = 1; $i <= 6; $i++)
    <li class="list-group-item p-1">
    	<div class="d-flex justify-content-between">
      	<h6 class="my-0">Assoc {{$i}} <small><span class="fa fa-star text-warning"></span></small></h6>
      	<div class="d-flex justify-content-between">
	      	<button class="btn btn-sm btn-success ml-2"><span class="fa fa-comment"></span> Chat</button>
	      	<button class="btn btn-sm btn-success ml-2"><span class="fa fa-phone"></span> Group Call</button>
	      	<button class="btn btn-sm btn-info ml-2"><span class="fa fa-users"></span> View Member</button>
	    	</div>
    	</div>
    </li>
    @endfor
  </ul>
	<div class="form-group d-flex mt-2">
		<button class="btn btn-secondary btn-block">Add Association</button>
	</div>
@endcomponent

@component('user.components.custom-modal',['id'=>'form-setting', 'title'=>'Settings', 'size'=>'modal-sm'])
	<ul class="list-group list-group-flush px-0">
    <li class="list-group-item px-0">
    	<div class="d-flex justify-content-between">
      	<h6 class="my-0 align-items-center"><i class="fa fa-eye-dropper"></i> User View Color</h6>
      	<select class="form-control w-25">
	    		<option>...</option>
	    	</select>
    	</div>
    </li>
    <li class="list-group-item px-0">
    	<a href="{{ url('user-edit') }}" class="my-0 align-items-center">
    		<span class="fa fa-cog"></span> Edit User Information
    	</a>
    </li>
    <li class="list-group-item px-0">
    	<a href="{{ url('user-edit') }}" class="my-0 align-items-center">
    		<span class="fa fa-cog"></span> Edit User Credit Card
    	</a>
    </li>
  </ul>
@endcomponent

