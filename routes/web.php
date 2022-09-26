<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;


Route::get('/produtos', [ProdutoController::class, 'index']);
Route::get('/categorias', [CategoriaController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categorias', CategoriaController::class);
Route::resource('produtos', ProdutoController::class);
//Route::get('produto/{slug}', [UserController::class, 'details'])->name('site.datails');
