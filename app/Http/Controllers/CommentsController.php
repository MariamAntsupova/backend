<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Comments::create([
            'user_id'=> $request->input('user_id'),
            'post_id'=> $request->input('post_id'),
            'comment'=> $request->input('comment')
        ]);    
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Comments=Comments::where("id",$id)->first();
        return view("show",["Comments"=>$Comments]);
            }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        return redirect()->route('single',["id"=>3]); 
    }
    public function single(){
        // $home = home::get();
        // return view('single',["home"=>$home]);
        return view('single');
    }
}
