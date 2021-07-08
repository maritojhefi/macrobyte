<?php

namespace App\Http\Livewire;

use Spotify;
use Livewire\Component;
use App\Models\Play_device;
use Illuminate\Support\Str;
use App\Models\Spotify_token;

class BuscarMusica extends Component
{
    public $buscar= '';
    public $show='active show';
    public $musica;
    public function add($musica){

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
               
               session()->flash('success', 'Cancion agregada!.');
           }
           else
           {
              
               session()->flash('danger', 'Error de token, genere uno nuevo!');
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
          
           $listafiltrada->push(['nombre'=>Str::limit($nombre, 40),'artista'=>Str::limit($artista, 50),'uri'=>$uri,'foto'=>$foto]);
           $contador=$contador+1;
         }
        }
        return view('livewire.buscar-musica',['canciones'=>$listafiltrada,'show'=>$this->show]);
       
    }
}
