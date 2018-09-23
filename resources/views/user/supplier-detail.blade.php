@extends('user.layout.base')

@section('style')
<style type="text/css">
	.input-group-append .dropdown-toggle {
		border-radius: 0;
	}
	header {
		padding: 0.5rem 0.25rem;
		padding-top: 25vh;
		min-height: 70vh;
		border-bottom: 1px #ddd solid ;
		background: url('https://i.ytimg.com/vi/4QSWfKU3JeA/maxresdefault.jpg');
		/*background-size: 100% auto;*/
		background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

		overflow: hidden;
	}
	.e-header {
		/*background-color: rgba(0,0,0,0.2);*/
		margin-left: -10px;
		margin-right: -10px;
		padding-top: 1rem;
		min-height: 45vh;
	}
	.e-avatar > img {
		width: 15vw;
		height: 15vw;
		background-color: white;
		padding: 5px;
	}
	.e-header-content {
		margin-top: 4rem;
	}
	.e-header-buttons {
		margin-top: 4rem;
	}
	.e-header-buttons button {
		font-weight: bold;
	}
	.e-header-content h1 {
		font-weight: bolder;
		color: white;
		margin-bottom: 1px;
	}
	.e-location {
		color: #c00;
	}
	.e-location a {
		color: white;
		border-bottom: dotted 1px white;
	}
</style>
@endsection

@section('content')

@component('user.components.navbar')
@endcomponent

	<header>
		<div class="e-header">
			<div class="container">
				<div class="row">
					<div class="col e-avatar">
						<img class="" src="https://via.placeholder.com/500x500/aadeff?text=Supplier Y" alt="Card image cap">
					</div>
					<div class="col-md-6 e-header-content">
						<h1>Supplier Y</h1>
						<div class="e-stars">
							<i class="fa fa-star checked"></i>
							<i class="fa fa-star checked"></i>
							<i class="fa fa-star checked"></i>
							<i class="fa fa-star checked"></i>
							<i class="fa fa-star"></i>
						</div>
						<div class="e-location h5">
							<i class="fa fa-map-marker-alt"></i> <a href="https://goo.gl/maps/1Cu9cezef6T2">Denpasar, Bali</a>
						</div>
						<h4 class="text-muted">"-- Motto Supplier Y --"</h4>
					</div>
					<div class="col e-header-buttons">
						<button class="btn btn-lg btn-success btn-block mb-2"><i class="fa fa-comment mr-1"></i> Chat Supplier</button>
						<button class="btn btn-lg btn-success btn-block mb-2"><i class="fa fa-phone mr-1"></i> Telpon Supplier</button>
						<button class="btn btn-lg btn-info btn-block"><i class="fa fa-inbox mr-1"></i> Kritik & Saran</button>
					</div>
				</div>
			</div>
		</div>
	</header>

	<main>
  	<div class="container-fluid">
  		<h2 class="my-3">Produk Dari Supplier Y</h2>
	  	<div class="row">
	  		@for ($i = 1; $i <= 12; $i++)
		  		<div class="col-md-2 e-col mb-2">
		      	<div class="card">
						  <img class="card-img-top" src="https://via.placeholder.com/500x500/aadeff?text=Product {{$i}}" alt="Card image cap">
						  <div class="card-body">
						  	<h5 class="card-title">
						  		<a href="./product/{{$i}}">Product {{$i}}</a>
						  	</h5>
						  	<h5 class="card-title"><small>Supplier Y</small></h5>
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