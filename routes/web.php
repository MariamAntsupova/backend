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
});
// Route::get('/products','ProductsController@index');
Auth::routes(['verify'=>true]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/create',"ProductsController@create" ) -> name("inputproduct");

Route::post('/home/store' , "ProductsController@store") -> name("productsstore");
Route::post("/home/delete", "ProductsController@delete") -> name("productdelete");
Route::get("/home/edit{id}","ProductsController@edit")->name("productedit");
Route::post("/home/update","ProductsController@update")->name("productupdate");

Route::get('/get_numbers', "ProductsController@get_phone");

Route::get('/Posts', "ProductsController@PostsWithComments");
Route::get('/Comments' , "ProductsController@CommentsWithPosts");
Route::get('/usersprojects', 'ProductsController@get_usersProjects');
