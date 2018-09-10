<template>
	<div class="modal fade" id="form-login" tabindex="-1" role="dialog" aria-hidden="true">
    <form class="form-signin">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header inverted">
          <h5 class="modal-title inverted" id="exampleModalLabel">Sign In Now</h5>
          <button type="button" class="close inverted" data-dismiss="modal" aria-label="Close">
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
</template>

<script>
	export default {
		name: 'FormLogin'
	}
</script>