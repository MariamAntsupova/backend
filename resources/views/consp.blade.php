{{-- search :

controller

public function search()
    {
        $search_text = $_GET['search'];
        $Posts = CreatePosts::where('title','LIKE','%'.$search_text.'%')->get();
        return view('search',["Posts"=>$Posts]);
    }  

web

Route::get('/search', 'PostsController@search');

blade

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

welcome

<ul class="nav navbar-nav nav-right " style="margin-right: 14%">
    <form class="form-inline" type="get" action="{{ url('/search') }}" >
        <input class="form-control" name="search" type="search" placeholder="ძებნა" aria-label="Search" >
        <button class="btn btn-secondary" type="submit">ძებნა</button>
    </form>
</ul>

--}}



{{-- delete/edit/about

web 

Route::post("/storecomments/delete", "CommentsController@delete")->name("delete");
Route::get("/storecomments/edit/{id}","CommentsController@edit")->name("edit");
Route::post("/storecomments/update/{id}","CommentsController@update")->name("update");
Route::get("/storecomments/show/{id}","CommentsController@show")->name("show");


controller

public function delete(Request $request)  
{
   Comments::where("id", $request->input("id"))->delete();
   return redirect()->back();
}
public function edit($id )
{
    $Comments=Comments::where("id",$id)->firstOrFail();
    return view("update",["Comments"=>$Comments]);
}
 public function update(Request $request,$id)
{   
    Comments::where("id",$id)->update([
        'comment'=> $request->input('comment')

        ]);
    return redirect()->route('single',["id"]); 
}
public function show($id)
{
    $Comments=Comments::where("id",$id)->first();
    return view("show",["Comments"=>$Comments]);
}



single blade

@foreach(App\Comments::get() as $com)
  <div class="media">
        <div class="media-left">
            <a href="#">
                <img src="{{ asset('images')."/".Auth::user()->image }}" alt="64x64" class="media-object" data-holder-rendered="true" style="height:64px;width: 64px ">
            </a>
        </div>
        <div class="media-body">
            <h2 class="media-heading"><a href="#">{{ Auth::user()->name }}</a></h2>
                {{ $com->comment }}

        </div>
        <hr style="width:50%;text-align:left;margin-left:0">

        </div>

        @if ($com->user_id === Auth::user()->id)
                    <div style="display: flex;flex-direction: row;">
                            <form action="{{ route('delete') }}" method="POST" style="margin-right:0.5%">
                            @csrf
                                <input type="hidden" name="id" value="{{ $com->id }}">
                                <button class="btn btn-warning">
                                    წაშლა
                                </button>
                            </form>

                            <div>
                                    <a href="{{ route('edit',["id"=>$com->id ]) }}" class="btn btn-warning">
                                        ჩასწორება
                                    </a>
                                     <a href="{{ route('show',["id"=>$com->id ]) }}" class="btn btn-warning">
                                        აღწერა
                                    </a> 
                                </div>
                               
                    </div>

        @endif
@endforeach

update

<div class="container">
    <form action="{{ route('update',["id"=>$Comments->id ]) }}" method="POST" >
                @csrf
        <img src="{{ asset('images')."/".Auth::user()->image }}" alt="64x64" class="media-object" data-holder-rendered="true" style="width: 64px;height: 64px">
        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
        <div class="media-body">
                    <h2 class="media-heading"><a href="#">{{ Auth::user()->name }}</a></h2>
        </div> 
        <textarea class="form-control" id="inputComment" name="comment">{{ $Comments->comment }}</textarea>     
        <button type="submit" class="btn btn-primary">განახლება</button>
    </form>
</div>
 --}}

 