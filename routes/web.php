<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/produtos', [ProdutoController::class, 'index']);
Route::get('/categorias', [CategoriaController::class, 'index']);
Route::get('/categorias/create', [CategoriaController::class, 'create']);

//Route::resource('categorias', CategoriaController::class);
Route::resource('produtos', ProdutoController::class);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
