<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;
Route::get("/","PostsController@index");
Route::get("/posts/create","PostsController@create");
Route::post("/posts/store","PostsController@store")->name("storeposts");
Route::get("/formtosendpostmethod",function(){
	return view("guest.form");
})->name("toreirect");


Route::get("/admin","MoviesController@index")-> name("adminindex");
Route::get("/admin/create","MoviesController@create") -> name("admincreate");
Route::post("/admin/store","MoviesController@store") -> name("adminstore");
/*
Route::get("/admin/genre","GenreController@genre") -> name("admingenre");
*/

// Route::get("/","TechCommentsController@index") -> name("adminindex");
// Route::get("/admin/create","TechCommentsController@create") -> name("admincreate");
// Route::post("/admin/store","TechCommentsController@store") -> name("adminstore");
// Route::get("/admin/posts","TechCommentsController@store") -> name("adminshow");
// Route::get("/admin/createpage","TechCommentsController@postpage") -> name("admincreatepage");
// Route::post("/admin/savepage","TechCommentsController@postpage") -> name("adminsavepage");
// Route::post("/admin", "TechCommentsController@posts");
// Route::get("/admin/show","TechCommentsController@show") -> name("adminshowpage");
// Route::get("/admin/nextshow/{id}","TechCommentsController@nextshow") -> name("adminnextshowpage");
// Route::get("/adminpanel", "AdminController@index");
// Route::post("/adminpanel/delete", "AdminController@delete") -> name("admindelete");
// Route::get("/adminpanel/createshow/{id}","AdminController@createshow")->name("admincreateshow");
// Route::get("/adminpanel/edit{id}","AdminController@edit")->name("adminedit");
// Route::post("/adminpanel/update","AdminController@update")->name("adminupdate");




// // Route::get('/', function () {
// //    return App\Posts::get(); 
// // });

// Route::get("/","PostsController@index");
// Route::get("/posts/create","PostsController@create");
// Route::post("/posts/store","PostsController@store")->name("storeposts");



// Route::get("/formtosendpostmethod",function(){
// 	return view("guest.form");
// })->name("toreirect");


// Route::post("/testrequest",function(Request $request){
// 	$data=[
// 		"name"=>$request->post()["name"]
// 	];
// 	return view("guest.table",["newdata"=>$data]);

// })->name("posttest");



// Route::get("/parameter/{id}",function($id){
// 	return $id;
// })->name("gettest");

// Route::get("/forma",function(){
// 	return view("guest.index");
// });

// Route::post("/main",function(Request $req){
// 	// return $req->post()["name"];
// 	$data=[
// 		[
// 			"name"=>$req->post()["name"],
// 			"surname"=>$req->post()["surname"],
// 			"add"=>$req->post()["add"],
// 			"info"=>$req->post()["info"],
// 			"dateofbirth"=>$req->post()["dateofbirth"],
			
			
// 		]
// 	];
// 	return view("hometask.cxrili",["newdata"=>$data]);
// })->name("main");