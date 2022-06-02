<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PruebasController extends Controller
{
    public function qr()
    {
        
        return view('pruebas.prueba-qr');
    }
    public function pruebaWebhook()
    {
        User::create([
            'name'=>'Marioooo',
        'email'=>'maritojhefi'.uniqid().'@gmail.com',
        'password'=>'45678123',
        'address'=>'tomatitas',
        'telf'=>'75140175',
        
        ]);
    }
}
