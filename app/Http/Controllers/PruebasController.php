<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebasController extends Controller
{
    public function qr()
    {
        
        return view('pruebas.prueba-qr');
    }
}
