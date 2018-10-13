@extends('user.index-supplier')
	
@section('title', 'User Rating')

@section('inputs')

	@for($i=1;$i<=10;$i++)

	<div class="card w-45 my-2 mx-2">
		<div class="row p-2">
			<div class="col-12 px-5 text-center">
				<div class="h2">
					<a href="#" class="text-muted"><span class="fa fa-star"></span></a>
					<a href="#" class="text-muted"><span class="fa fa-star"></span></a>
					<a href="#" class="text-muted"><span class="fa fa-star"></span></a>
					<a href="#" class="text-muted"><span class="fa fa-star"></span></a>
					<a href="#" class="text-muted"><span class="fa fa-star"></span></a>
				</div>
				<div class="row">
					<div class="col-6 text-right">
						<img src="http://placekitten.com/100/100" alt="gambar {{$i}}">
					</div>
					<div class="col-6 text-left">
						<h4>Cust {{$i}}</h4>
						<h6>Data 1 ... </h6>
						<h6>Data 2 ... </h6>
						<h6>Data 3 ... </h6>
					</div>
				</div>
			</div>
		</div>
	</div>

	@endfor

@endsection

@section('addscripts')
	<script type="text/javascript">
		$('#contractvargroup').multiSelect({ keepOrder: true });
	</script>
@endsection