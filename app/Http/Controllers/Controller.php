<?php

namespace App\Http\Controllers;

use App\Models\Pasante;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function pasantes(){
        return view('pasantes');
    }
    public function formulario(Request $request){
        $extension= $request->imagen->extension();
       $filename= time().".". $extension;
       $request->imagen->move(public_path('images'),$filename);
       //dd($request->lista3);
       Pasante::create([
           'nombre'=>$request->nombre,
           'cedula'=>$request->cedula,
           'telefono'=>$request->telefono,
           'nacimiento'=>$request->fecha,
           'estudios'=>$request->estudios,
           'photoshop'=>$request->lista1,
           'office'=>$request->lista2,
           'redes'=>$request->lista3,
           'marketing'=>$request->lista4,
           'edicionvideos'=>$request->lista5,
           'poseecompu'=>$request->computadora,
           'foto'=>$filename,
           'tarijeno'=>$request->vivetarija,
           'menora25'=>$request->menosde25,
            'practica'=>$request->practica
       ]);
       return back()->with('success','Formulario enviado! Ya puede cerrar esta pagina');
    }
    public function admin(){

        $pasantes= Pasante::paginate(5);
        
        return view('admin', compact('pasantes'));
    }
}
