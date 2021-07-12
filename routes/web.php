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
 Route::get('/cotizacion/crear', [App\Http\Controllers\CotizacionController::class, 'create'])->name('cotizacion.create');
 Route::get('/cotizacion', [App\Http\Controllers\CotizacionController::class, 'index'])->name('cotizacion.index');
 Route::get('/cotizar/vista',  [App\Http\Controllers\CotizacionController::class, 'vistaprevia'])->name('cotizacion.vista');

 //roles
 Route::get('/rol',  [App\Http\Controllers\RolController::class, 'index'])->name('rol.index');
 Route::post('/rol/create',  [App\Http\Controllers\RolController::class, 'create'])->name('rol.create');
 Route::delete('/rol/eliminar/{rol}',  [App\Http\Controllers\RolController::class, 'delete'])->name('rol.delete');

//empresa
Route::get('/empresa', [App\Http\Controllers\EmpresaController::class, 'info'])->name('empresa.info');

//musica
Route::get('/musica', [App\Http\Controllers\MusicaController::class, 'index'])->name('musica.index');
Route::get('/actual', [App\Http\Controllers\MusicaController::class, 'actual'])->name('musica.actual');
Route::get('/musica/callback', [App\Http\Controllers\MusicaController::class, 'callback'])->name('musica.token');
Route::get('/musica/listarranking', [App\Http\Controllers\MusicaController::class, 'listarranking'])->name('listarranking');


//pagos online
Route::get('/pago', [App\Http\Controllers\PagoController::class, 'index'])->name('pago.index');
Route::post('/crear', [App\Http\Controllers\PagoController::class, 'create'])->name('pago.create');
Route::get('/pago/{pago}', [App\Http\Controllers\PagoController::class, 'editar'])->name('pago.editar');

//ventas
Route::get('/venta', [App\Http\Controllers\VentaController::class, 'index'])->name('venta.index');

//compras
Route::get('/compra', [App\Http\Controllers\CompraController::class, 'index'])->name('compra.index');



//inventarios
Route::get('/inventario', [App\Http\Controllers\InventarioController::class, 'index'])->name('inventario.index');

//perifericos
Route::get('/periferico', [App\Http\Controllers\PerifericoController::class, 'index'])->name('periferico.index');
Route::get('/periferico/reproductor', [App\Http\Controllers\PerifericoController::class, 'reproductores'])->name('periferico.reproductores');
Route::get('/periferico/historial', [App\Http\Controllers\PerifericoController::class, 'historial'])->name('periferico.historial');
Route::get('/periferico/token', [App\Http\Controllers\PerifericoController::class, 'token'])->name('periferico.token');
Route::post('/periferico/activarreproductor', [App\Http\Controllers\PerifericoController::class, 'activarreproductor'])->name('activarreproductor');

//generar qr
Route::get('/qr', [App\Http\Controllers\QrController::class, 'index'])->name('qr.index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/facturar', [App\Http\Controllers\HomeController::class, 'facturar'])->name('home');




