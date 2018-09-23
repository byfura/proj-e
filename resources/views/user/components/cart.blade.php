
<div id="cart-container" class="e-cart e-bg-primary collapse">
	<div class="container-fluid e-cart-items">
		@for ($i = 1; $i <= 12; $i++)
			<div class="row my-1">
				<div class="col-md-6 text-center">
					<img src="http://placehold.it/100x100" alt="..." class="img-responsive"/>
				</div>
				<div class="col-md-6 text-right">
					<h4><a href="{{ url('product/'.$i) }}">Product {{$i}}</a></h4>
					<div>@200.000 x 1</div>
					<div><strong>Rp 200.000</strong></div>
				</div>
			</div>
		@endfor
	</div>
	<div class="container-fluid">
		<div class="row py-2 mt-2" style="background-color: rgba(0,0,0,0.1)">
			<div class="col-md-6 text-right">
				<h5><strong>Total : </strong></h5>
			</div>
			<div class="col-md-6 text-right">
				<h5><strong>Rp 1.200.000</strong></h5>
			</div>
			<button class="btn btn-block btn-success" onclick="window.location.href = '{{url('checkout')}}'">Checkout</button>
		</div>
	</div>
</div>