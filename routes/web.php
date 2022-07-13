<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

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
    return view('welcome');
});

Route::get('/productos', function () {
    return view('productos.index'); //ruta para acceder a la pagina principal del CRUD
});

Route::get('/productos/crear_producto',[ProductoController::class, 'create']); //Ruta para acceder a la vista -crear producto-

Route::get('/productos/editar_producto',[ProductoController::class, 'edit']); //Ruta para acceder a la vista -editarproducto-

Route::resource('productos',ProductoController::class); //Acceso a todas las url del crud
