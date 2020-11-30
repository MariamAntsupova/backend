<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photos;
use App\User;
use Illuminate\Support\Facades\Input;
use App\Comments;
use App\CreatePosts;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function single($id){
        $post=CreatePosts::where("id",$id)->firstOrFail();
        return view('single',['post'=>$post]);
    }
    public function update_profile(){
        
        return view('updateProfile');
    }
    public function profile_page(Request $request){
         $this->validate( $request, [
          'image' => 'required',
        ]); 
        if(Input::file("image")){
            $dp=public_path('images');
            $filename=uniqid().".jpg";
            $img=Input::file("image")->move($dp, $filename);
        }
        User::where("id",$request->input("id"))->update([
            "name"=>$request->input("name"),
            "email"=>$request->input("email"),
            "image"=>$filename
            ]);
        return redirect()->route('home');
    }
    public function update_post(){
        return view('updatePost');
    }
}
