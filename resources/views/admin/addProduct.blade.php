@extends('layouts.app')

@section('content')
	<div class="container">
	<h1>Add Product</h1>
		<form action="{{ route('create_product') }}" method="POST" enctype="multipart/form-data">
			@csrf

			<input type="text" name="name" placeholder="Name" class="form-control mt-2">
			<input type="file" name="image" class="form-control mt-2">
			<input type="text" name="price" placeholder="Price" class="form-control mt-2">
			<textarea name="description" placeholder="description" class="form-control mt-2"></textarea>

			@foreach (App\Category::get() as $e)
				<input type="checkbox" name="category[]" id="{{ $e->id }}" value="{{ $e->id }}">
				<label for="{{ $e->id }}">{{ $e->category_name }}</label>
			@endforeach

			<button class="btn btn-primary w-100 mt-2">Add</button>
		</form>
	</div>
@endsection