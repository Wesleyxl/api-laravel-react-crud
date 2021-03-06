<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/products', "ProductController@index");
Route::get('/products/{id}', "ProductController@show");
Route::post('/products/create', "ProductController@store");
Route::post('/products/edit/{id}', "ProductController@update")->name('edit');
Route::get('/products/delete/{id}', "ProductController@destroy")->name('delete');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
