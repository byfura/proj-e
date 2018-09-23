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
</style>
@endsection

@section('content')

@component('user.components.navbar')
@endcomponent

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
  			<button class="ml-1 btn btn-outline-primary" onclick="window.location.href = './product2';"><i class="fa fa-th-list"></i></button>
  		</div>
  	</div>
  </header>

  <main>
  	<div class="container-fluid">
	  	<div class="row">
	  		@for ($i = 1; $i <= 12; $i++)
		  		<div class="col-xl-2 col-lg-3 e-col mb-2">
		      	<div class="card">
						  <img class="card-img-top" src="https://via.placeholder.com/500x500/aadeff?text=Product {{$i}}" alt="Card image cap">
						  <div class="card-body">
						  	<h5 class="card-title">
						  		<a href="./product/{{$i}}">Product {{$i}}</a>
						  	</h5>
						  	<h5 class="card-title"><small><a href="./supplier/{{$i}}">Supplier {{$i}}</a></small></h5>
						    <h3 class="card-title"><small>Rp.</small> {{number_format($i * rand(100,1000) * 1000)}}</h3>
						    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						    tempor incididunt ut labore et dolore magna aliqua.</p>
						  </div>
						</div>
					</div>
	      @endfor
	  	</div>
  	</div>

	  <div class="text-muted">
	    <nav aria-label="Page navigation example" class="float-right">
	      <ul class="pagination justify-content-end">
	        <li class="page-item"><a class="page-link" href="#">1</a></li>
	        <li class="page-item"><a class="page-link" href="#">2</a></li>
	        <li class="page-item"><a class="page-link" href="#">3</a></li>
	        <li class="page-item"><a class="page-link" href="#">4</a></li>
	        <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
	        <li class="page-item"><a class="page-link" href="#">100</a></li>
	      </ul>
	    </nav>
	    <div class="clearfix"></div>
	  </div>

  </main>

  @component('user.components.footer')
  @endcomponent

 

@endsection