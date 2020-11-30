@extends('layouts.app')
@section('content')

@foreach($Posts as $Post)

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-10 mt-2" >
            <div class="card">
                <div class="card-header">
                    <a class="js-tree-value" href="{{ route('single',["id"=>$Post->id ]) }}"> {{ $Post->title }}</a>
                </div>
                <div class="card-body">
                    ტექსტი: {{ $Post->text }}
                </div>
            </div>
        </div>
    </div> 
</div>

@endforeach

@endsection