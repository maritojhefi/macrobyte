<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use PDF;
use Illuminate\Http\Request;

class CotizacionController extends Controller
{
    public function create(){
        return view('cotizaciones.create');
    }

    public function index(){
        return view('cotizaciones.index');

    }

  
    public function vistaprevia(){
        return view('cotizaciones.vistaprevia');
    }

}
