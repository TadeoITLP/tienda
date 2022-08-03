<?php

use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;
use App\Models\Producto;
use Illuminate\Support\Facades\Session;
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

/*ESTE ES EL ARCHVO DE INICIO Y DEBE DE CONTENER LAS RUTAS DISPONIBLE  */
Route::get('/',[PrincipalController::class, "inicio"])->name("inicio");

Route::get('/altaProductos/formulario',function(){
    return view("altaProductos");
})->middleware("autentificado");

Route::post('/altaProductos/guardar',[PrincipalController::class, "guardarProducto"])
->middleware("autentificado");

Route::get('/login/formulario', function () {
    return view("login");
});

Route::post('/login/entrar',[PrincipalController::class, "login"]);

