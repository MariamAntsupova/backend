<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Card;
use Auth;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $carts = Card::where('user_id', Auth::user()->id)->get();
        $products = array();
        foreach ($carts as $c) {
            array_push($products, Product::where('id', $c->product_id)->firstOrFail());
        }

        return view('card', ["prd"=>$products]);
    }

    public function delete($id)
    {
        $user_product = Card::where('user_id', Auth::user()->id)->get();
            
            foreach ($user_product as $product) {
                Card::where('product_id', $product->product_id)->first()->delete();
                return redirect()->back();
            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        Card::create([
            'user_id'=>Auth::user()->id,
            'product_id'=>$id
        ]);

        return redirect()->back();
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
        //
    }
}
