<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CajaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\CierreCajaController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OlvidePasswordController;
use App\Http\Controllers\InicioController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('inventario', InventarioController::class);
Route::resource('productos', ProductoController::class);
Route::resource('caja', CajaController::class);
Route::resource('proveedor', ProveedorController::class);
Route::resource('cierreCaja', CierreCajaController::class);
Route::resource('usuarios', UsuariosController::class);
Route::resource('login', LoginController::class);
Route::resource('olvidePassword', OlvidePasswordController::class);
Route::resource('inicio', InicioController::class);