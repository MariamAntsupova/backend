@extends('layouts.app')

@section('content')
	<div style="text-align: center;">		

	<h1> Admin Page </h1>
	<br>
	<a class="btn btn-outline-success" href="{{ route('add_product') }}">Add Product</a>	
	<br>
	<br>
	<a class="btn btn-outline-success" href="{{ route('add_category') }}">Add Category</a>	
	<br>

	</div>

@endsection