<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix'=>'categorias', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('', ['as'=>'categorias', 'uses'=>"\App\Http\Controllers\CategoriaController@index"]);
    Route::get('create', ['as'=>'categorias.create', 'uses'=>"\App\Http\Controllers\CategoriaController@create"]);
    Route::post('store', ['as'=>'categorias.store', 'uses'=>"\App\Http\Controllers\CategoriaController@store"]);
    Route::get('{id}/destroy', ['as'=>'categorias.destroy', 'uses'=>"\App\Http\Controllers\CategoriaController@destroy"]);
    Route::get('{id}/edit', ['as'=>'categorias.edit', 'uses'=>"\App\Http\Controllers\CategoriaController@edit"]);
    Route::put('{id}/update', ['as'=>'categorias.update', 'uses'=>"\App\Http\Controllers\CategoriaController@update"]);
});

Route::group(['prefix'=>'produtos', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('', ['as'=>'produtos', 'uses'=>"\App\Http\Controllers\ProdutoController@index"]);
    Route::get('create', ['as'=>'produtos.create', 'uses'=>"\App\Http\Controllers\ProdutoController@create"]);
    Route::post('store', ['as'=>'produtos.store', 'uses'=>"\App\Http\Controllers\ProdutoController@store"]);
    Route::get('{id}/destroy', ['as'=>'produtos.destroy', 'uses'=>"\App\Http\Controllers\ProdutoController@destroy"]);
    Route::get('{id}/edit', ['as'=>'produtos.edit', 'uses'=>"\App\Http\Controllers\ProdutoController@edit"]);
    Route::put('{id}/update', ['as'=>'produtos.update', 'uses'=>"\App\Http\Controllers\ProdutoController@update"]);
});



Route::group(['prefix'=>'users', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('', ['as'=>'users', 'uses'=>"\App\Http\Controllers\UserController@index"]);
    Route::get('create', ['as'=>'users.create', 'uses'=>"\App\Http\Controllers\UserController@create"]);
    Route::post('store', ['as'=>'users.store', 'uses'=>"\App\Http\Controllers\UserController@store"]);
    Route::get('{id}/destroy', ['as'=>'users.destroy', 'uses'=>"\App\Http\Controllers\UserController@destroy"]);
    Route::get('{id}/edit', ['as'=>'users.edit', 'uses'=>"\App\Http\Controllers\UserController@edit"]);
    Route::put('{id}/update', ['as'=>'users.update', 'uses'=>"\App\Http\Controllers\UserController@update"]);
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
