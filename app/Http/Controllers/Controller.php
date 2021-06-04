<?php

namespace App\Http\Controllers;

use App\Models\Pasante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

        if($request->image)
        {
            $extension= $request->imagen->extension();
            $filename= time().".". $extension;
            $request->imagen->move(public_path('images'),$filename);
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
                 'practica'=>$request->practica
            ]);
        }
        else
        {
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
                'tarijeno'=>$request->vivetarija,
                 'practica'=>$request->practica
            ]);
        }
      
       //dd($request->lista3);
      
       return back()->with('success','Formulario enviado! Ya puede cerrar esta pagina');
    }
    public function admin(){

        $pasantes= Pasante::paginate(5);
        
        return view('admin', compact('pasantes'));
    }
    public function borrarpasante(Pasante $pasante){
        if($pasante->foto)
        {
            Storage::disk('public_images')->delete($pasante->foto);
           
        }
     
        $pasante->delete();
        return back();
    }
}
