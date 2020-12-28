@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="width:100%; margin-top: 1%;margin-bottom: 1%;padding: 2%;display: flex;">
                	<h4 style="margin-left: 5%"><b>Product Name: {{ $product->title }}</b></h4>
                    <img src="{{ $product->image }}" width="120" height="60">
                    <p> About Product : {{ $product->description }}</p>
                </div>
{{--                 @if (Session::get('AdminMid', false))
 --}}                    <div style="display: flex;flex-direction: row;">
                        <div style="margin-left: 1%">
                        <form method="post" action="{{ route('delete') }}">
                        @csrf
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <button style="margin: 1%;" class="btn btn-outline-danger">delete</button>
                        </form>
                        <div style="margin-left: 1%">
                            <a href="{{ route('edit',["id"=>$product->id ]) }}" class="btn btn-outline-info">
                            edit
                            </a>
                        </div>
                    </div>
{{--                 @endif
 --}}            </div>
        <hr style="width:100%">
    </div>
</div>

@endsection