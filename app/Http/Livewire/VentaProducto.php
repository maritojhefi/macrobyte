<?php

namespace App\Http\Livewire;

use App\Models\Venta;
use App\Models\Product;
use Livewire\Component;
use App\Models\Detalle_venta;

class VentaProducto extends Component
{
    protected $paginationTheme = 'bootstrap';
    public $buscar = '';
    

    
    public function render()
    {
       
        $productos=Product::where('nombre','LIKE','%'.$this->buscar.'%')->orWhere('codigoBarra',$this->buscar)->paginate(5);
        $total=$productos->total();
        
        return view('livewire.venta-producto',compact('productos','total'));
    }
}
