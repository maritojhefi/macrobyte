<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductoRequestCreate;

class ProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        
        return view('productos.indexproducto');
 
    }
    public function create(ProductoRequestCreate $request){
        Product::create($request->validated());
        return back()->with('success','Producto  Registrado!');
    }

    public function delete(Product $producto)
    {
        $producto->delete();
        return back()->with('success','El producto '.$producto->nombre.' fue eliminado!');
    }

    public function edit(Product $producto)
    {
        return view('productos.edit',['producto'=>$producto]);
    }
}
