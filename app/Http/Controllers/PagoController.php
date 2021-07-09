<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use Illuminate\Http\Request;
use App\Http\Requests\PagoRequestCreate;

class PagoController extends Controller
{
    public function index(){
        $pagos=Pago::all();
        return view('pagos.index',compact('pagos'));
 
    }
    public function create(PagoRequestCreate $request){
        Pago::create($request->validated());
        return back()->with('success','Pago  Registrado!');
    }

    public function editar(Pago $pago){
        
        return view('pagos.pago',compact('pago'));
    }
}
