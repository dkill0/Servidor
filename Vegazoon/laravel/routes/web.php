<?php

use App\Models;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
Route::middleware('auth')->group(function(){
    Route::get('productos/', 'ProductController@index')->name('productos.index');
    Route::get('productos/portatiles', 'ProductController@portatiles')->name('productos.portatiles');
    Route::get('productos/{id}/perfil', 'ProductController@perfilUsuario')->name('productos.perfil');
    Route::get('productos/{id}/producto', 'ProductController@perfilProducto')->name('productos.producto');
    Route::get('productos/{id}/pedidos', 'ProductController@compruebaPedido')->name('productos.compruebaPedido');
    Route::post('productos/{idUsu}/{idProd}/producto', 'ProductController@nuevoArticulo')->name('productos.nuevoArticulo');




});


Auth::routes();

