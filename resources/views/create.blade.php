@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container" style="text-align: center;">
        <form method="POST" action="{{ route('store') }}">
            @csrf
            <h3>Add Product</h3>

            <br>
            <label><b>Product Name </b></label>
            
            <input class="form-control" type="text" name="title" placeholder="enter product name ...">

            <br>
            <label><b>About Product</b></label>
            
            <textarea class="form-control" name="description" placeholder=" description ..."></textarea>
            <br>
            <br>
            <label><b>image</b></label>
            
            <input class="form-control" type="image/png" name="image">
            <br>
            <label><b>Category</b></label>
            <select name="subcategory_id">
                @foreach(App\SubCategory::get() as $item)
                    <option value="{{ $item->id }}">{{ $item->subcategory_name }}</option>
                @endforeach
            </select>
            <br>
            <button class="btn btn-primary" type="submit" >save</button>
        </form>
    </div>
        </div>
    </div>
</div>
@endsection