<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TableForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $cabeceras;
    public $contenido;
    public $variables;
    public $nombre;
    public $rutadelete;
    public function __construct($contenido, $cabeceras, $variables, $nombre, $rutadelete)
    {
        $this->cabeceras = $cabeceras;
        $this->contenido = $contenido;
        $this->variables = $variables;
        $this->rutadelete = $rutadelete;
        $this->nombre = $nombre;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table-form');
    }
}
