<?php

namespace App\View\Components;

use Illuminate\View\Component;

class cardForm extends Component
{
    
    public $lista;
    public $ruta;
    public function __construct($lista, $ruta)
    {
        $this->lista = $lista;
        $this->ruta = $ruta;
        
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-form');
    }
}
