<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrMaker extends Component
{

    use WithFileUploads;

    public $url="macrobyte.site";
    public $qr='';
    public $tamano=200;
    public $tamanoImagen=3;
    public $imagenActiva;
    public function ver()
    {
        dd($this->imagenActiva);
    }
    public function urlLista()
    {
      
    }
    public function descargarQR()
    {
        
    }
    public function render()
    {
        return view('livewire.qr-maker');
    }
}
