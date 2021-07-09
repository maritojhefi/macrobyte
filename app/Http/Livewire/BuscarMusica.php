<?php

namespace App\Http\Livewire;

use Spotify;
use Livewire\Component;
use App\Models\Play_device;
use Illuminate\Support\Str;
use App\Models\Ranking_track;
use App\Models\Spotify_token;
use Illuminate\Support\Facades\Http;

class BuscarMusica extends Component
{
    public $buscar= '';
    public $show='active show';
    public $musica;
    
    public function add($musica , $nombre, $artista, $foto){

       
        $track=explode(':',$musica);
        
    $reproductoractual=Play_device::find(1);

    if($reproductoractual!=null)
    {
  
        $deviceid=$reproductoractual->id_reproductor;
       $tokens=Spotify_token::all();
       if($tokens->count()>0)
       {
           $tokenactual=$tokens->last();
           

           $agregaracola = Http::withToken($tokenactual->token)
           ->post("https://api.spotify.com/v1/me/player/queue?uri=spotify%3Atrack%3A".$track[2]."&device_id=".$deviceid);
   
          
           if($agregaracola->successful())
           {
            $canciones=Ranking_track::where('uri',$musica)->get();
            if($canciones->count()==0)
            {
                Ranking_track::create([
                    'nombre'=>$nombre,
                    'artista'=>$artista,
                    'foto'=>$foto,
                    'uri'=>$musica,
                    'reproducido'=>1,
                ]);
            }
            else
            {
                foreach($canciones as $cancion)
                {
                    $cancion->increment('reproducido',1);
                    break;
                }
            
            }
            session()->flash('cerrar');

               session()->flash('success', $nombre.' agregado a la cola!.');
           }
           else
           {
            $refrescartoken=Http::withHeaders([
                'Authorization' => 'Basic YTc4MTQ3ODE0MzBmNDliMzgwNTFlZjY2ZWIyYmFhOTk6YTE3MzRhY2I0MmU0NDNiYWE5YmU1MjMyYzZlYWNmMWE='
              
            ])->asForm()->post('https://accounts.spotify.com/api/token', [
                'grant_type' => 'refresh_token',
                'refresh_token' => $tokenactual->refresh_token,
            ]);
            $respuesta=response($refrescartoken);
            $dividido=explode(':',$respuesta);
            $tokenobtenido=explode('"',$dividido[5]);
            $tokendb=Spotify_token::first();
           
            $tokendb->token=$tokenobtenido[1];
            $tokendb->save();
            $agregaracola = Http::withToken($tokenobtenido[1])
           ->post("https://api.spotify.com/v1/me/player/queue?uri=spotify%3Atrack%3A".$track[2]."&device_id=".$deviceid);
           
           $canciones=Ranking_track::where('uri',$musica)->get();
           if($canciones->count()==0)
           {
               Ranking_track::create([
                   'nombre'=>$nombre,
                   'artista'=>$artista,
                   'foto'=>$foto,
                   'uri'=>$musica,
               ]);
           }
           else
           {
               foreach($canciones as $cancion)
               {
                   $cancion->increment('reproducido',1);
                   break;
               }
           
           }
            
            session()->flash('success', $nombre.' agregado a la cola!.');
           }
       }
       else
       {
        
           session()->flash('danger', 'No existe token, genere uno en perifericos');
       }
    }
    else
    {
        
        session()->flash('danger', 'No se habilito el reproductor, seleccione uno en perifericos!');
    }
    
    }
    public function render()
    {
        $listafiltrada=collect();
        $contador=0;
        if(strlen($this->buscar)<=4)
        {
           
            return view('livewire.buscar-musica',['show'=>$this->show]);
            
        }
        else
        {
            $canciones= Spotify::searchTracks($this->buscar)->limit(20)->get('tracks');
            
            foreach($canciones['items'] as $tema)
         {
            $artista='';
    
           $nombre=$tema['name'];
           foreach($tema['artists'] as $art)
           {
            $artista=$artista." ".$art['name'];
    
           }
           foreach($tema['album']['images'] as $img)
           {
            $foto= $img['url'];
            break;
           }
           $uri=$tema['uri'];
          $nombreprocesado=Str::limit($nombre, 40);
          $nombreprocesado=str_replace("'","",$nombreprocesado);
          $artistaprocesado=Str::limit($artista, 50);
          $artistaprocesado=str_replace("'","",$artistaprocesado);
           $listafiltrada->push(['nombre'=>$nombreprocesado,'artista'=>$artistaprocesado,'uri'=>$uri,'foto'=>$foto]);
           $contador=$contador+1;
         }
        }
        return view('livewire.buscar-musica',['canciones'=>$listafiltrada,'show'=>$this->show]);
       
    }
}
