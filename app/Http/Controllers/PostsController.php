<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CreatePosts;
use Illuminate\Support\Facades\Input;
use App\Photos;
use App\User;
use App\Rules\TitleRule;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validate( $request, [
          'image' => 'required',
        ]); 
        if(Input::file("image")){
            $dp=public_path('images');
            $filename=uniqid().".jpg";
            $img=Input::file("image")->move($dp, $filename);
        }
        CreatePosts::create([
            'title'=> $request->input('title'),
            'text'=> $request->input('text'),
            'image'=>$filename,
        ]);    
        return redirect()->route('welcome'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
        public function search()
    {
        $search_text = $_GET['search'];
        $Posts = CreatePosts::where('title','LIKE','%'.$search_text.'%')->get();
        return view('search',["Posts"=>$Posts]);
    }    
}
