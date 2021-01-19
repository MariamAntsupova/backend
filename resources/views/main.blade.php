@extends('layouts.app')
@section('content')



<div class="container">

	<div style="text-align: center;">
		<h4>Filter By Category</h4>
		
	<form method="POST" action="{{ route('filter') }}">
		@csrf
		
	<select name="select" id="select">
		@foreach(App\Category::get() as $cat)
			<option value="{{ $cat->id }}">
				{{ $cat->category_name }}
			</option>
		@endforeach
	</select>

	<button class="btn btn-primary" type="submit">Filter</button>

	</form>

	</div>

	<div class="row">
		@foreach($prd as $product)
			<div class="card" style="width: 15rem; padding: 2%">
			  <img class="card-img-top" src="{{  asset('images')."/".$product->image }}" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">{{ $product->name }}</h5>
			    <p class="card-text">{{ $product->description }}</p>
			    <p class="card-text">{{ $product->price }}₾</p>
			    <a href="{{ route('single',["id"=>$product->id]) }}" class="btn btn-primary">See more</a>
			  </div>
			</div>
		@endforeach
	</div>
</div>
@endsection