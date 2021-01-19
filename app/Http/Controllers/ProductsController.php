<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\ProductCategory;
use App\Category;
use App\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();

        return view('main', ['prd'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Request $request)
    {
        if (Input::file("image")) 
        {
            $dp=public_path("images");
            $filename=uniqid().".jpg";
            $img=Input::file("image")->move($dp,$filename);


            Product::create([
                "name"=>$request->input("name"),
                "description"=>$request->input("description"),
                "price"=>$request->input("price"),
                "image"=>$filename
            ]);
        }

        $latest = Product::Orderby('created_at', 'desc')->first();

        foreach ($request->input('category') as $cat_id) 
        {
        
        ProductCategory::create([
            'product_id'=>$latest->id,
            'category_id'=>$cat_id
        ]);

        }

        return view('admin.main');

        
    }

    public function create_category(Request $request)
    {
        Category::create([
            'category_name'=>$request->input('category_name')
        ]);

        return view('admin.main');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function single($id){
        $product=Product::where("id",$id)->firstOrFail();
        return view('single',['product'=>$product]);
    }
    public function delete(Request $request)  
    {
       Product::where("id", $request->input("id"))->delete();

       ProductCategory::where('product_id', $request->input('id'))->delete();

       return redirect()->route('home');
    }
    public function edit($id )
    {
        $product=Product::where("id",$id)->firstOrFail();
        return view("update",["product"=>$product]);
    }
     public function update(Request $request,$id)
    {   
        Product::where("id",$id)->update([
                "name"=>$request->input("name"),
                "description"=>$request->input("description"),
                "price"=>$request->input("price"),

            ]);
        return redirect()->route('single',["id"=>$id]); 
    }
    public function show($id)
    {
        $product=Product::where("id",$id)->first();
        return view("show",["product"=>$product]);
    }

    public function filter(Request $request)
    {
        $products_id = ProductCategory::where('category_id', $request->input('select'))->get();

        $products = array();

        foreach ($products_id as $p) {
            array_push($products, Product::where("id", $p->product_id)->firstOrFail()); 
        }

        return view('main', ["prd"=>$products]);
    }

}
