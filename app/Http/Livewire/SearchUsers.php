<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class SearchUsers extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search = '';
    public $order='asc';
    public $paginate=10;
    protected $listeners = ['searchUsers' => 'render','edit'];

    public function render()
    {
        
        $productos=Product::where('nombre','LIKE','%'.$this->search.'%')->orWhere('codigoBarra',$this->search)->orderBy('created_at',$this->order)->paginate($this->paginate);
        $total=$productos->total();
        
        return view('livewire.search-users', compact('productos','total'));
    }

    public function edit(Product $id){
        $this->emitTo('editProduct', 'render');
    }
    public function ordenacion(){
        if($this->order=='asc'){
            $this->order='desc';
        }
        else{
            $this->order='asc';            
        }
    }
}
