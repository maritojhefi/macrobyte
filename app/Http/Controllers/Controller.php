<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Pasante;
use App\Models\Tarjeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function pasantes(){
        return view('pasantes');
    }
    public function formulario(Request $request){

        if($request->imagen )
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
    public function control(){
      return view('asistencia.control');
    }
    public function entrada(Request $request){
        $tarjetas= Tarjeta::where('numero',$request->numero)->first();
        if($tarjetas)
        {
            if($tarjetas->estado!='online')
            {
                $tarjetas->estado='online';
                $tarjetas->hora_marcada=Carbon::now();
                $tarjetas->update();
                return back()->with('success','Entrada marcada para: '.$tarjetas->nombre);
            }
            else
            {
                return back()->with('danger','Ya se marco la entrada de: '.$tarjetas->nombre);

            }
            

        }
        else
        {
            return back()->with('danger','Esta tarjeta no se encuentra registrada, registrela');

        }
      }
      public function salida(Request $request){
        $tarjetas= Tarjeta::where('numero',$request->numero)->first();
        if($tarjetas)
        {
            if($tarjetas->estado=='online')
            {
                $ultimahora=Carbon::parse($tarjetas->hora_marcada);
            
                $acumulado=$ultimahora->diffInMinutes(Carbon::now());
                $enhoras=round($acumulado/60,2);
                if($enhoras<10)
                {
                    DB::table('tarjetas')->where('id','=',$tarjetas->id)->increment('minutos',$acumulado);
    
                    $tarjetas->estado='offline';
                    $tarjetas->hora_marcada=Carbon::now();
                    $tarjetas->update();
                    return back()->with('success','Salida marcada para: '.$tarjetas->nombre.' con un total de '.$acumulado.' minutos');
                
                }
                else
                {
                    $tarjetas->estado='offline';
                    $tarjetas->hora_marcada=Carbon::now();
                    $tarjetas->update();
                    return back()->with('warning','No se marco el tiempo ya que excedio el tiempo maximo con: '.$enhoras.'horas');

                }
               }
            else
            {
                return back()->with('danger','La salida ya fue marcada para: '.$tarjetas->nombre);

            }
            

        }
        else
        {
            return back()->with('danger','Esta tarjeta no se encuentra registrada, registrela');

        }
      }
      public function revisar(Request $request){
          $numero=$request->numero;
        $tarjeta= Tarjeta::where('numero',$request->numero)->first();
        if($tarjeta)
        {
            $texto="Editando existente...";
            return view('asistencia.editar')->with(compact('tarjeta','texto'));

        }
        else
        {
            $texto="Editando nuevo!";

            $tarjeta= Tarjeta::create([
                'numero'=>$numero
            ]);
            return view('asistencia.editar')->with(compact('tarjeta','texto'));

        }
      }
      public function actualizar (Request $request, Tarjeta $tarjeta){
          if($request->nombre==$tarjeta->nombre)
          {
            return redirect('/control');
          }
          else
          {
            $tarjeta->nombre=$request->nombre;
            $tarjeta->update();
            return redirect('/control');

          }
        
       
      }
}
