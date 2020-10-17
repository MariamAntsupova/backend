<?php

namespace App\Http\Controllers;
use App\Products;
use App\Comments;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
    	$products=Products::get();
    	return view("products.index",["products"=>$products]);
    }
    // to return view form
    public function create()
    {
    	return view("products.create");
    }
    //to store data in db
    public function store(Request $request)
    {
    	Products::create([
    		"title"=>$request->input("title"),
    		"description"=>$request->input("text")
    	]);
    	return redirect()->route("adminindex");
    }
    public function show($id)
    {
    	$product=Products::where("id",$id)->firstOrFail();
    	$comments=Comments::where("product_id",$id)->get();
    	return view("products.show",["product"=>$product,"comments"=>$comments]);
    	//return Products::find($id)->first();
    }
    //to return update form
    public function edit($id)
    {
    	$product=Products::where("id",$id)->firstOrFail();
    	return view("products.edit",["product"=>$product]);
    }
    public function update(Request $request)
    {
    	Products::where("id",$request->input("id"))->update([
    		"title"=>$request->input("title"),
    		"description"=>$request->input("text")
    	]);
    }
    public function delete(Request $request)
    {
    	Products::where("id",$request->input("id"))->delete();
    	return redirect()->back();
    }
    public function store_comment(Request $request)
    {
    	Comments::create([
    		"comments"=>$request->input("comments"),
    		"product_id"=>$request->input("id")
    	]);
    }
}