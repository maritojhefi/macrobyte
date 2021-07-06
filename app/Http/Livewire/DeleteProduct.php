<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class DeleteProduct extends Component
{
    public $productId;

    public function getProductProperty()
    {
        return Product::find($this->productId);
    }

    public function deleteProduct()
    {
        $this->product->delete();
        $this->emit('searchUsers','render');
        session()->flash('success', 'Producto Eliminado!.');

    }
    public function render()
    {
        return view('livewire.delete-product');
    }
}
