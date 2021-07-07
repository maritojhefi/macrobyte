<?php

namespace App\Http\Livewire;

use Spotify;
use Livewire\Component;
use Illuminate\Support\Str;

class BuscarMusica extends Component
{
    public $buscar= '';
    public $show='active show';
   
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
