<?php

namespace App\Http\Controllers;
use App\Posts;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts= Posts::get();
        return view("admin.index",["posts"=>$posts]) ;   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createshow($id)
    {
        $posts=Posts::where("id",$id)->firstOrFail();
        return view("admin.createshow",["posts"=>$posts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function edit($id )
    {
        $posts=Posts::where("id",$id)->firstOrFail();
        return view("admin.edit",["posts"=>$posts]);

    }
    public function update(Request $request)
    {
        Posts::where("id",$request->input("id"))->update([
            "title"=>$request->input("title"),
            "text"=>$request->input("text")
            ]);
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)    {
        Posts::where("id", $request->input("id"))->delete();
        return redirect()->back();
    }
}
