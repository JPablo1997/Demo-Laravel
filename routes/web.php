<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UsuarioController;
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

// Ruta que trae Laravel por Defecto, la que se accede asi: http://localhost:8000 (Ruta raiz)
Route::get('/', function () {
    return view('welcome');
});
/*
    Ruta que retorna una cadena de caracteres, este metodo get recibe dos parametros:
    1. '/clientes' -- Define la ruta (http://localhost:8000/clientes)
    2. function(){} -- Realiza la operacion que se debe realizar en base a la URL, en este caso retornar un mensaje
*/
Route::get('/clientes', function () {
    return "Listado de clientes";
});

//Ruta que recibe un parametro en la URL, aqui nos retornaba un mensaje usando el parametro 
Route::get('/clientes/detalle/{id}', [ClienteController::class, 'detalle']);

//Ruta para mostrar los datos de un Usuario en especifico
Route::get('/usuarios/detalle/{id}', [UsuarioController::class, 'show']);

//Ruta para eliminar un Usuario en especifico
Route::get('/usuarios/eliminar/{id}', [UsuarioController::class, 'destroy']);