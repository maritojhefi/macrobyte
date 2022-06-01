<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('api')->group(function () {
    Route::resource('users', UsuarioController::class);
});

Route::post('/pruebas/webhook', function()
{
    User::create([
        'name'=>'Marioooo',
        'json'=>'holis',
    'email'=>'maritojhefi'.uniqid().'@gmail.com',
    'password'=>'45678123',
    'address'=>'tomatitas',
    'telf'=>'75140175',
    
    ]);
});
Route::post('/pruebas/webhook/crear', function(Request $request)
{
    User::create([
        'name'=>'Marioooo',
        'json'=>'crear'.json_encode($request->all()),
    'email'=>'maritojhefi'.uniqid().'@gmail.com',
    'password'=>'45678123',
    'address'=>'tomatitas',
    'telf'=>'75140175',
    
    ]);
});

Route::post('/pruebas/webhook/actualizar', function(Request $request)
{
    
    User::create([
        'name'=>'Marioooo',
        'json'=>json_encode($request->all()),
    'email'=>'maritojhefi'.uniqid().'@gmail.com',
    'password'=>'45678123',
    'address'=>'tomatitas',
    'telf'=>'75140175',
    
    ]);
});
Route::post('/pruebas/webhook/crearConver', function(Request $request)
{
    User::create([
        'name'=>'Marioooo',
        'json'=>'crearConver',
    'email'=>'maritojhefi'.uniqid().'@gmail.com',
    'password'=>'45678123',
    'address'=>'tomatitas',
    'telf'=>'75140175',
    
    ]);
});
Route::post('/pruebas/webhook/actualizarConver', function(Request $request)
{
    User::create([
        'name'=>'Marioooo',
        'json'=>'actualizarConver',
    'email'=>'maritojhefi'.uniqid().'@gmail.com',
    'password'=>'45678123',
    'address'=>'tomatitas',
    'telf'=>'75140175',
    
    ]);
});

