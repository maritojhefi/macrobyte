<?php

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


Route::get('/', function () {
    return view('index');
});
Route::get('/google085c423aaa790337', function () {
    return view('google085c423aaa790337');
});

Route::get('/pasantes', [App\Http\Controllers\Controller::class, 'pasantes'])->name('pasantes');
Route::post('/formulario', [App\Http\Controllers\Controller::class, 'formulario'])->name('formulario');
Route::get('/admin', [App\Http\Controllers\Controller::class, 'admin'])->name('admin');


