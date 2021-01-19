@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
			<div class="card" style="width: 20rem;">
			  <img class="card-img-top" src="{{  asset('images')."/".$product->image }}" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">{{ $product->name }}</h5>
			    <p class="card-text">{{ $product->description }}</p>
			    <p class="card-text">{{ $product->price }}₾</p>
			   	@if (Auth::user()->email == "admin@admin.com")
					<form action="{{ route('delete') }}" method="POST">
						@csrf
						<input type="hidden" name="id" value="{{ $product->id }}">
						<button class="btn btn-warning" type="submit">
							Delete
						</button>
					</form>
					<div>
                    	<a href="{{ route('show',["id"=>$product->id ]) }}" class="btn btn-warning">
                    		About
                        </a>
                        <a href="{{ route('edit',["id"=>$product->id ]) }}" class="btn btn-warning">
                            Edit
                        </a>
                    </div>
                @else
		    		<a href=" " class="btn btn-primary">Add to card</a>
		    	@endif
			  </div>
			</div>
	</div>
</div>
@endsection