@extends('layouts.app')
@section('content')

    <div class="container">
    <h1>Edit Product</h1>
        <form action="{{ route('update',['id'=>$product->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="text" name="name" placeholder="Name" value="{{ $product->name }}" class="form-control mt-2">
            <input type="text" name="price" placeholder="Price" value="{{ $product->price }}"
            class="form-control mt-2">
            <textarea name="description" placeholder="description"  class="form-control mt-2">{{ $product->description }}</textarea>

            @foreach (App\Category::get() as $e)
                <input type="checkbox" name="category[]" id="{{ $e->id }}" value="{{ $e->id }}">
                <label for="{{ $e->id }}">{{ $e->category_name }}</label>
            @endforeach

            <button class="btn btn-primary w-100 mt-2">Update</button>
        </form>
    </div>
@endsection