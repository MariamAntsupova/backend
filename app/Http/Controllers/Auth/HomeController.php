<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Products;

class HomeController extends Controller
{
    public function index()
    {
        return view('home' , [
            "Products" => Products::get()
        ]);
        $Product=Products::where( "id" , $id)->firstOrFail();
    }
}
