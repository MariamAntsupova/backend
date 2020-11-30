@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="{{ route('storeposts') }}" method="POST" enctype="multipart/form-data" id="add_post">
            @csrf
            <a class="btn btn-secondary btn-sm position-relative">
                ფოტო          
                <input type="file" name="image" class="uploadFile" >
            </a>
            <input type="text" class="form-control" name="title" placeholder="input title">
            <textarea name="text" class="form-control" placeholder="text"></textarea>
            <div class="form-group has-feedback">
                <button type="submit" class="btn btn-secondary btn-action pull-right" >
                    შენახვა                            
                </button> 
            </div>     
        </form>
    </div>

<a href="https://seclab.ge/profile-update#" class="scrollup"><i class="fa fa-angle-up"></i></a>

@endsection