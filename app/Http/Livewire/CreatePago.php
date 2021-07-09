<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class CreatePago extends Component
{
    protected $paginationTheme = 'bootstrap';
    public $buscar = '';
    public function render()
    {
        $productos=Product::where('nombre','LIKE','%'.$this->buscar.'%')->orWhere('codigoBarra',$this->buscar)->paginate(5);
        $total=$productos->total();
        
        return view('livewire.create-pago',compact('productos','total'));
    }
}
