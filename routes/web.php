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

Route::get('/home', 'HomeController@Main');

Route::get('/addcat', 'CategoryController@ShowCategory');
Route::post('/storecat', 'CategoryController@StoreCategory'); //uzklausa
Route::get('/allcat', 'CategoryController@AllCategories');
Route::get('/delcat/{category}', 'CategoryController@DeleteCategory');

Route::get('/adproduct', 'ProductController@AdProduct');
Route::post('/storeproduct', 'ProductController@StoreProduct'); //uzklausa
Route::get('/allproducts', 'ProductController@AllProducts');