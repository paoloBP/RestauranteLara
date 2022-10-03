<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('categorias', [\App\Http\Controllers\CategoriaController::class, 'index']);
Route::get('categorias/create', [\App\Http\Controllers\CategoriaController::class,  ['except' => 'create']]);
Route::post('categorias/store', [\App\Http\Controllers\CategoriaController::class, 'store']);

Route::get('produtos', [\App\Http\Controllers\ProdutoController::class, 'index']);
Route::get('produtos/create', [\App\Http\Controllers\ProdutoController::class, 'create']);
Route::post('produtos/store', [\App\Http\Controllers\ProdutoController::class, 'store']);








Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
