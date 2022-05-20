<?php

namespace App\View\Components;

use Illuminate\View\Component;

class EditForm extends Component
{
    public $variables;
    public $modelo;
    public $rutaeditar;
    public function __construct($modelo, $variables ,$rutaeditar)
    {
        $this->variables = $variables;
        $this->modelo = $modelo;
        $this->rutaeditar = $rutaeditar;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.edit-form');
    }
}
