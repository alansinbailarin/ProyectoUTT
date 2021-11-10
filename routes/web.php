<?php

use App\Http\Controllers\EdificioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>['auth']],function(){
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('edificios',EdificioController::class);
    Route::resource('plantas',PlantaController::class);
    Route::resource('areas',AreaController::class);
    Route::resource('resguardos',ResguardoController::class);
    Route::resource('prestamos',PrestamoController::class);
    Route::resource('tipoaltas',TipoaltaController::class);
    Route::resource('estados',EstadoController::class);
    Route::resource('categorias',CategoriaController::class);
    Route::resource('marcas',MarcaController::class);
    Route::resource('subcategorias',SubcategoriaController::class);
    Route::resource('modelos',ModeloController::class);
    Route::resource('edificios',EdificioController::class);
    Route::resource('productos',ProductoController::class);
});