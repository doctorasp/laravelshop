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
    return view('templates/main');
});

Route::get('/', [
    'uses'=> 'GoodsController@allGoods'
]);

Route::get('/categories/{latin_url}/', [
    'uses' => 'CategoriesController@nameAction'
]);

Route::get('/categories/{id}', [
    'uses' => 'CategoriesController@categoryAction'
]);
Route::get('/goods/{id}', [
    'uses'=>'GoodsController@showAction'
]);
Route::get('/order/{id}', [
   'uses'=>'OrdersController@buyAction'
]);
Route::post('/order_final',[
   'uses'=>'OrdersController@order_final'
]);
