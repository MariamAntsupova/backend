<?php

namespace App\Http\Controllers;
use App\techComments;
use Illuminate\Http\Request;

class TechCommentsController extends Controller
{
    public function index()
    {
    	$techComments=techComments::get();
    	return view("techComments.index",["techComments"=>$techComments]);
    }
    // to return view form
    public function create()
    {
    	return view("techComments.create");
    }
    //to store data in db
    public function store(Request $request)
    {
    	TechComments::create([
    		"name"=>$request->input("name"),
    		"mail"=>$request->input("mail"),
    		"comment"=>$request->input("comment"),
    		]);
    }
    public function show()
    {
    	return TechComments::get();
    }
    public function update_form(){

    }
    public function update(){

    }
    public function delete(Request $request)
    {
    	// TechComments::where("text", $request->input("text"))->delete();
    }
}
