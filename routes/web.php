<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

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
Route::match(['get', 'post'], '/', [ProdutoController::class, 'index'])->name('home');


Route::prefix('categoria')->group(function(){
    Route::get('/', [ProdutoController::class, 'categoria'])->name('categoria');
    Route::post('/', [ProdutoController::class, 'categoria'])->name('categoria');
    Route::get('/{idCategoria}', [ProdutoController::class, 'categoria'])->name('categoriaPorId');
    Route::post('/{idCategoria}', [ProdutoController::class, 'categoria'])->name('categoriaPorId');
});

Route::prefix('cadastrar')->group(function(){
    Route::get('/', [ClienteController::class, 'cadastrar'])->name('cadastrar');
    Route::post('/', [ClienteController::class, 'cadastrar'])->name('cadastrar');
});
