<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class EditProduct extends Component
{
    public $producto;
    public Product $prod;

    protected $rules = [
        'prod.nombre' => 'required|string|min:6',
        'prod.imagen' => 'required',
    ];

    public function mount(Product $producto)
    {
        $this->producto = $producto;
    }
    public function render()
    {
        session()->flash('message', 'Post successfully updated.');
        return view('livewire.edit-product', ['producto'=>$this->producto])
        ->extends('asistencia.master')
        ->section('section');
    }

    public function save()
    {
        $this->validate();

        $this->producto->save();
    }
}
