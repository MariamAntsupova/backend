<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function store(Request $request)
    {
        $this->validate( $request, [
          'image' => 'required',
        ]);
        if (Input::file('image')){
            $dp=public_path("images");
            $filename=uniqid().".jpg";
            $img=Input::file('image')->move($dp,$filename);

        }
        
        return Photos::create([
            'username'=>$request->input('username'),
            'email'=>$request->input('email'),
            'image'=>$filename

   
        ]) ;
    }
}
