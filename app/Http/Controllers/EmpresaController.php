<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;
use App\Http\Requests\EmpresaRequestCreate;

class EmpresaController extends Controller
{
   public function info(){
       return view('empresa.info');
   }
   public function index(){
    $empresas=Empresa::paginate(5);
    return view('empresa.index',compact('empresas'));
   }
   public function create(EmpresaRequestCreate $request){
    Empresa::create($request->validated());
    return back()->with('success','Empresa  Registrada!');
}

public function delete(Empresa $empresa)
{
    $empresa->delete();
    return back()->with('info','La empresa fue eliminada!');
}
}
