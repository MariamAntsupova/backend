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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/search', 'PostsController@search');
Route::get('/single', 'HomeController@single');
Route::get('/single/{id}', 'HomeController@single')->name('single');
Route::get('/updateProfile', 'HomeController@update_profile')->name('updateProfile');
Route::get('/updatePost', 'HomeController@update_post')->name('updatePost');
Route::post('/homepage', 'HomeController@profile_page')->name('homepage');
Route::post('/storecomments' , 'CommentsController@store')->name ('storecomments');
Route::post("/poststore","PostsController@store")->name("storeposts");
Route::post("/storecomments/delete", "CommentsController@delete")->name("delete");
Route::get("/storecomments/edit/{id}","CommentsController@edit")->name("edit");
Route::post("/storecomments/update/{id}","CommentsController@update")->name("update");
Route::get("/storecomments/show/{id}","CommentsController@show")->name("show");

// Route::get('/updateProfile', function () {
//     return view('guest.index',["products"=>App\products::where("image","<>",null)->get()]);
// });