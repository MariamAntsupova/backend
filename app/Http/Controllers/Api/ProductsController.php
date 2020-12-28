<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Products;

class ProductsController extends Controller
{ 
	protected $Request;

	public function __construct(Request $request){
    	$this->middleware('auth:api');
    	$this->request=$request;
    }
    public function index(){
    	return $this->request->user()->id;

    }
}
