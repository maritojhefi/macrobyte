<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index(){
        
        return view('ventas.index');
 
    }

    
}
