<?php

use App\Http\Livewire\EditProduct;
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
    return view('index');
})->name('inicio');
Route::get('/google085c423aaa790337', function () {
    return view('google085c423aaa790337');
});

Route::get('/pasantes', [App\Http\Controllers\Controller::class, 'pasantes'])->name('pasantes');
Route::post('/formulario', [App\Http\Controllers\Controller::class, 'formulario'])->name('formulario');
Route::get('/admin', [App\Http\Controllers\Controller::class, 'admin'])->name('admin');
Route::get('/borrarpasante{pasante}', [App\Http\Controllers\Controller::class, 'borrarpasante'])->name('borrarpasante');


//asistencia
Route::get('/control', [App\Http\Controllers\Controller::class, 'control'])->name('control');
Route::post('/entrada', [App\Http\Controllers\Controller::class, 'entrada'])->name('entrada');
Route::post('/salida', [App\Http\Controllers\Controller::class, 'salida'])->name('salida');
Route::post('/revisar', [App\Http\Controllers\Controller::class, 'revisar'])->name('revisar');
Route::put('/actualizar/{tarjeta}', [App\Http\Controllers\Controller::class, 'actualizar'])->name('actualizar');


//usuarios
Route::get('/usuario', [App\Http\Controllers\UsuarioController::class, 'index'])->name('usuario.index');
Route::post('/usuario/create', [App\Http\Controllers\UsuarioController::class, 'create'])->name('usuario.create');
Route::delete('/usuario/eliminar/{usuario}',  [App\Http\Controllers\UsuarioController::class, 'delete'])->name('usuario.delete');

//proyectos
Route::get('/proyecto', [App\Http\Controllers\ProyectoController::class, 'index'])->name('proyecto.index');
Route::post('/proyecto/create', [App\Http\Controllers\ProyectoController::class, 'create'])->name('proyecto.create');
Route::delete('/proyecto/eliminar/{proyecto}',  [App\Http\Controllers\ProyectoController::class, 'delete'])->name('proyecto.delete');


//productos
Route::get('/producto', [App\Http\Controllers\ProductoController::class, 'index'])->name('producto.index');
Route::post('/producto/create', [App\Http\Controllers\ProductoController::class, 'create'])->name('producto.create');
Route::delete('/producto/eliminar/{producto}',  [App\Http\Controllers\ProductoController::class, 'delete'])->name('producto.delete');
Route::get('/producto/editar/{producto}',  [App\Http\Controllers\ProductoController::class, 'edit'])->name('producto.edit');

 //cotizaciones
 Route::get('/cotizacion', [App\Http\Controllers\CotizacionController::class, 'index'])->name('cotizacion.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/facturar', [App\Http\Controllers\HomeController::class, 'facturar'])->name('home');


/*Route::get('{any}', function () {
    return view('layouts.app');
})->where('any', '.*');*/

