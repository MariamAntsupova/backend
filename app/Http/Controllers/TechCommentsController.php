<?php

namespace App\Http\Controllers;
use App\techComments;
use App\Posts;
use Illuminate\Http\Request;

class TechCommentsController extends Controller
{
    public function index()
    {
    	$techPosts= Posts::take(3)->get();
    	return view("techComments.index",["techComments"=>$techPosts]);
    }
    // to return view form
    public function create()
    {
    	// return view("techComments.create");
    	$techComments=techComments::get();
    	return view("techComments.create",["techComments"=>$techComments]);
    }
    //to store data in db
    public function store(Request $request)
    {
    	TechComments::create([
    		"name"=>$request->input("name"),
    		"mail"=>$request->input("mail"),
    		"comment"=>$request->input("comment"),
    		"post_id"=>$request->input("post_id"),
    		]);
    	return redirect()->back();
    }
    public function postpage(Request $request){

    	Posts::create([
    		"title"=>$request->input("title"),
    		"image"=>$request->input("image"),
    		"text"=>$request->input("text"),
    		]);
    	return view("techComments.createpage");

    }

    public function posts(){

    	 return Posts::get();
    }

    public function show()
    {
 		$techComments=techComments::get();
    	return view("techComments.show",["techComments"=>$techComments]);
    }
    public function nextshow($id)
    {
 		$techComments=techComments::where("post_id", $id)->get();
 		$techPosts=Posts::where("id", $id )->firstOrFail();
 		// return $techComments;
    	return view("techComments.nextshow",["techComments"=>$techComments,"techPosts"=>$techPosts]);

    }
    
    // public function update_form(){

    // }
    // public function update(){

    // }
    // public function delete(Request $request)
    // {
    // 	TechComments::where("text", $request->input("text"))->delete();
    // }
 
}
