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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/main', 'ProductsController@index')->name('main');

Route::get('/admin', 'AdminController@index')->name('AdminPage');

Route::get('/admin/add/product', function() {
	return view('admin.addProduct');
})->name('add_product');

Route::get('/admin/add/category', function() {
	return view('admin.addCategory');
})->name('add_category');

Route::post('/admin/create/category', 'ProductsController@create_category')->name('create_category');

Route::post('/admin/create/product', 'ProductsController@create')->name('create_product');
