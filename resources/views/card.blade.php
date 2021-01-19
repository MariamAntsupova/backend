@extends('layouts.app')

@section('content')

<div class="container">
	
	<div class="row">
		<p hidden>
		{{ $price_all = 0 }}
		</p>
		@foreach($prd as $product)
			<div class="card" style="width: 15rem; padding: 2%">
			  <img class="card-img-top" src="{{  asset('images')."/".$product->image }}" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">{{ $product->name }}</h5>
			    <p class="card-text">{{ $product->description }}</p>
			    <p class="card-text">{{ $product->price }}₾</p>
			    <p hidden> 
			    {{ $price_all += $product->price }}
			    </p>
			    <div style="text-align: center;">
			    <a href="{{ route('single',["id"=>$product->id]) }}" class="btn btn-primary">See more</a>
			    <br>
			    <a class="btn btn-outline-danger" href="{{ route('removefromcart',["id"=>$product->id]) }}">Remove</a>
			    </div>
			  </div>
			</div>
		@endforeach
	</div>

	<div style="text-align: center;">
		<br>
	<label>Total: {{ $price_all }}</label>
	<br>
	<button class="btn btn-outline-success" type="Submit">Order</button>
	</div>
</div>
@endsection