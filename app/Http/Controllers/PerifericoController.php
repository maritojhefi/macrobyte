<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Play_device;
use Illuminate\Http\Request;
use App\Models\Spotify_token;
use Illuminate\Support\Facades\Http;

class PerifericoController extends Controller
{
    public function index(){
        return view('perifericos.index');
    }

    public function reproductores()
    {
        $reproductoractivo=Play_device::find(1);
        $tokens=Spotify_token::all();
        if($tokens->count()>0)
        {
            $tokenactual=$tokens->last();
    $dispositivos= Http::withToken($tokenactual->token)
    ->get('https://api.spotify.com/v1/me/player/devices');
    $cont=0;
   $lista=collect(response($dispositivos));
   $coleccion=collect();
   
   if($dispositivos->successful())
   {
    foreach($lista as $lis)
    {
        if($cont==1)
        {
          $separado=explode('"id" : "',$lis);
          $cont2=0;
          foreach ($separado as $filtro)
          {
              if($cont2>0)
              {
                  $id=explode('"',$filtro);
                  
                  $coleccion->prepend(['id'=>$id[0],'nombre'=>$id[10],'tipo'=>$id[14]]);
              }
              $cont2++;
          }
  
          
          }
        
               $cont++;
          }
              return view('perifericos.reproductores', compact('coleccion','reproductoractivo'));
   }
   else
   {
    return back()->with('danger','El token expiro, genere otro');

   }
  
        }
        else
        {
            return back()->with('danger','Necesita un token de spotify para acceder a esta funcion');
        }
    }
   
    public function historial(){
        return view('perifericos.historial');
    }
    public function token(){
        $token=Spotify_token::first();
        if($token)
        {
            $creacion=$token->created_at;
            $tiempoactual=Carbon::now();
            $diferencia= $creacion->diffInMinutes($tiempoactual);
            
            return view('perifericos.tokenactual',compact('token','diferencia'));
        }
        else
        {
            return back()->with('danger','No hay ningun token guardado');
        }
       
    }

    public function activarreproductor(Request $request)
    {
       
        Play_device::truncate();
        Play_device::create([
            'nombre'=>$request->nombre,
            'id_reproductor'=>$request->idrep,
            'estado'=>'activo',
        ]);
        return back()->with('success',$request->nombre.' es ahora el reproductor activo!');
    }

    public function respuestaWebhook(Request $request)
    {
        User::create([
            'name'=>"Mario Jheferson Cotave Rodriguez",
            'json'=>'hola',
            'email'=>"mario.cotave".uniqid()."@macrobyte.site",
            'password'=>"jhefi123",
            'telf'=>"75140175",
            'rol_id'=>3,
            'empresa_id'=>1,
           
        ]);
    }
}
