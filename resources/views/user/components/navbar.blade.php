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
				    <div class="dropdown-divider"t></div>
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
    	<a href="#" data-toggle="modal" data-target="#form-user-info" class="my-0 align-items-center">
    		<span class="fa fa-cog"></span> User/Guest Information
    	</a>
    </li>
    <li class="list-group-item px-0">
    	<a href="{{ url('user-edit') }}" class="my-0 align-items-center">
    		<span class="fa fa-cog"></span> Additional Information
    	</a>
    </li>
    <li class="list-group-item px-0">
    	<a href="{{ url('user-edit') }}" class="my-0 align-items-center">
    		<span class="fa fa-cog"></span> Credit Card Info
    	</a>
    </li>
    <li class="list-group-item px-0">
    	<a href="{{ url('user-edit') }}" class="my-0 align-items-center">
    		<span class="fa fa-cog"></span> User Group
    	</a>
    </li>
    <li class="list-group-item px-0">
    	<a href="{{ url('user-edit') }}" class="my-0 align-items-center">
    		<span class="fa fa-cog"></span> Language
    	</a>
    </li>
    <li class="list-group-item px-0">
    	<a href="{{ url('user-edit') }}" class="my-0 align-items-center">
    		<span class="fa fa-cog"></span> Currency
    	</a>
    </li>
    <li class="list-group-item px-0">
    	<a href="#" data-toggle="modal" data-target="#form-point" class="my-0">
    		<span class="fa fa-cog"></span> Point
    	</a>
    </li>
    <li class="list-group-item px-0">
    	<a href="{{ url('user-edit') }}" class="my-0 align-items-center">
    		<span class="fa fa-cog"></span> Rating
    	</a>
    </li>
    <li class="list-group-item px-0">
    	<a href="{{ url('user-edit') }}" class="my-0 align-items-center">
    		<span class="fa fa-cog"></span> Privacy
    	</a>
    </li>
    <li class="list-group-item px-0">
    	<a href="{{ url('user-edit') }}" class="my-0 align-items-center">
    		<span class="fa fa-cog"></span> Security
    	</a>
    </li>
    <li class="list-group-item px-0">
    	<a href="{{ url('user-edit') }}" class="my-0 align-items-center text-danger">
    		<span class="fa fa-cog"></span> Delete User
    	</a>
    </li>
  </ul>
@endcomponent

@component('user.components.custom-modal',['id'=>'form-point', 'title'=>'Point', 'size'=>'modal-sm'])
	<ul class="list-group list-group-flush px-0">
    <li class="list-group-item px-0">
    	<div class="d-flex justify-content-between">
      	<h6 class="my-0 align-items-center"><i class="fa fa-star"></i> User Point</h6>
      	<span>
	    		25
	    	</span>
    	</div>
    </li>
    <li class="list-group-item px-0">
    	<button onclick="window.location.href = '{{url('product-special')}}'" class="my-0 btn btn-info btn-block">
    		Order Special Membership
    	</button>
    </li>
  </ul>
@endcomponent

@component('user.components.custom-modal',['id'=>'form-user-info', 'title'=>'User Info', 'size'=>'modal-lg'])
  <form class="form-signin" action="{{url('register3')}}">
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <div class="form-group">
          <label for="i-firstname">First Name</label>
          <input value="xxx" readonly type="text" class="form-control form-control-md" id="i-firstname" name="firstname" placeholder="First Name">
        </div>
      <hr/>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="form-group">
          <label for="i-surname">Surname</label>
          <input value="xxx" readonly type="text" class="form-control form-control-md" id="i-surname" name="surname" placeholder="Surname">
        </div>
      <hr/>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="form-group">
          <label for="i-house">House</label>
          <input value="xxx" readonly type="text" class="form-control form-control-md" id="i-house" name="house" placeholder="House">
        </div>
        <div class="form-group">
          <label for="i-street">Street</label>
          <input value="xxx" readonly type="text" class="form-control form-control-md" id="i-street" name="street" placeholder="Street">
        </div>
        <div class="form-group">
          <label for="i-town">Town</label>
          <input value="xxx" readonly type="text" class="form-control form-control-md" id="i-town" name="town" placeholder="Town">
        </div>
        <hr/>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="form-group">
          <label for="i-region">Region</label>
          <input value="xxx" readonly type="text" class="form-control form-control-md" id="i-region" name="region" placeholder="Region">
        </div>
        <div class="form-group">
          <label for="i-country">Country</label>
          <input value="xxx" readonly type="text" class="form-control form-control-md" id="i-country" name="country" placeholder="Country">
        </div>
        <div class="form-group">
          <label for="i-postcode">Post Code</label>
          <input value="xxx" readonly type="text" class="form-control form-control-md" id="i-postcode" name="postcode" placeholder="Post Code">
        </div>
        <hr/>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="form-group">
          <label for="i-phone">Phone</label>
          <input value="xxx" readonly type="text" class="form-control form-control-md" id="i-phone" name="phone" placeholder="Phone">
        </div>
        <div class="form-group">
          <label for="i-mobile">Mobile</label>
          <input value="xxx" readonly type="text" class="form-control form-control-md" id="i-mobile" name="mobile" placeholder="Mobile">
        </div>
        <div class="form-group">
          <label for="i-fax">Fax</label>
          <input value="xxx" readonly type="text" class="form-control form-control-md" id="i-fax" name="fax" placeholder="Fax">
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="form-group">
          <label for="i-preference">Preference</label>
          <input value="xxx" readonly type="text" class="form-control form-control-md" id="i-preference" name="preference" placeholder="Preference">
        </div>
        <div class="form-group">
          <label for="i-carregno">Carregno</label>
          <input value="xxx" readonly type="text" class="form-control form-control-md" id="i-carregno" name="carregno" placeholder="Carregno">
        </div>
        <div class="form-group">
          <label for="i-alternativeemail">Alternative Email</label>
          <input value="xxx" readonly type="text" class="form-control form-control-md" id="i-alternativeemail" name="alternativeemail" placeholder="Alternative Email">
        </div>
      </div>
      <div class="col-sm-12">
        <hr/>
        <div class="form-group">
          <label for="i-vatnumber">Vat Number</label>
          <input value="xxx" readonly type="text" class="form-control form-control-md" id="i-vatnumber" name="vatnumber" placeholder="Vat Number">
        </div>
        <div class="form-group">
          <label for="i-vatnumbervalidated">Vat Number Validated</label>
          <input value="xxx" readonly type="text" class="form-control form-control-md" id="i-vatnumbervalidated" name="vatnumbervalidated" placeholder="Vat Number Validated">
        </div>
        <div class="form-group">
          <label for="i-vatnumbervalidatedresponse">Vat Number Validated Response</label>
          <input value="xxx" readonly type="text" class="form-control form-control-md" id="i-vatnumbervalidatedresponse" name="vatnumbervalidatedresponse" placeholder="Vat Number Validated Response">
        </div>
      </div>
    </div>
  </form>
@endcomponent

