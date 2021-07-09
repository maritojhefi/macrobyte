<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;
use App\Http\Requests\ProyectoRequestCreate;

class ProyectoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $proyectos=Proyecto::paginate(5);
        $total=$proyectos->total();
        return view('proyectos.index',compact('proyectos','total'));
 
    }
    public function create(ProyectoRequestCreate $request){
        Proyecto::create($request->validated());
        return back()->with('success','Proyecto  Registrado!');
    }

    public function delete(Proyecto $proyecto)
    {
        $proyecto->delete();
        return back()->with('info','El proyecto fue eliminado!');
    }
}
