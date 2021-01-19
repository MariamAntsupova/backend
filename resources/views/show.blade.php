@extends('layouts.app')
@section('content')

<div class="container" style="margin-left: 45%; margin-top:10%">
        <div class="media" >
            <div class="card p-2 mt-4">
                    <h5 class="card-title">product: {{ $product->name }}</h5>
                    <p class="card-text">description: {{ $product->description }}</p>
                    <p class="card-text">price: {{ $product->price }}₾</p>
                    <small>created at: {{ $product->created_at }}</small>
            </div>
        </div>

</div>

@endsection