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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'ProductsController@index')->name('main');

Route::get('/admin', 'AdminController@index')->name('AdminPage');

Route::get('/admin/add/product', function() {
	return view('admin.addProduct');
})->name('add_product');

Route::get('/admin/add/category', function() {
	return view('admin.addCategory');
})->name('add_category');

Route::post('/admin/create/category', 'ProductsController@create_category')->name('create_category');

Route::post('/admin/create/product', 'ProductsController@create')->name('create_product');
Route::get('/single/{id}', 'ProductsController@single')->name('single')->middleware('auth');

Route::post("/delete", "ProductsController@delete")->name("delete");
Route::get("/edit/{id}","ProductsController@edit")->name("edit");
Route::post("/update/{id}","ProductsController@update")->name("update");
Route::get("/show/{id}","ProductsController@show")->name("show");

Route::post("/filter", "ProductsController@filter")->name('filter');
