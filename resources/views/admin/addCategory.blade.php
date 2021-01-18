@extends('layouts.app')

@section('content')
	<div class="container">
	<h1>Add Category</h1>
		<form action="{{ route('create_category') }}" method="POST">
			@csrf
			<input type="text" name="category_name" placeholder="Title" class="form-control mt-2">
			<button class="btn btn-primary w-100 mt-2">Add</button>
		</form>
	</div>
@endsection