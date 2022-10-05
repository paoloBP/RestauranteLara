<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UserController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('categorias', [\App\Http\Controllers\CategoriaController::class, 'index']);
Route::get('categorias/create', [\App\Http\Controllers\CategoriaController::class, 'create']);
Route::post('categorias/store', [\App\Http\Controllers\CategoriaController::class, 'store']);

Route::get('produtos', [\App\Http\Controllers\ProdutoController::class, 'index']);
Route::get('produtos/create', [\App\Http\Controllers\ProdutoController::class, 'create']);
Route::post('produtos/store', [\App\Http\Controllers\ProdutoController::class, 'store']);

Route::get('users', [\App\Http\Controllers\UserController::class, 'index']);
Route::get('users/create', [\App\Http\Controllers\UserController::class, 'create']);
Route::post('users/store', [\App\Http\Controllers\UserController::class, 'store']);








Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
