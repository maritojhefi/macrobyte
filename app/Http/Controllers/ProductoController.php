<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Detalle_venta;
use Illuminate\Support\Facades\DB;
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
    public function update(Request $request){
        dd($request);
    }
    public function form(){
        return view('productos.formcreate');
    }
    public function venta(){
        $venta=Venta::create(['user_id'=>auth()->user()->id]);
        return view('productos.venta',compact('venta'));

    }
    public function addtolist(Request $request)
    {
        $venta = Venta::find($request->id_venta);
        $producto=Product::find($request->id_producto);
        if($producto->cantidad>0)
        {
            DB::table('ventas')->where('id','=',$request->id_venta)->increment('total',$producto->precioVenta);
            DB::table('products')->where('id','=',$request->id_producto)->decrement('cantidad',1);
            
            $venta->products()->attach($request->id_producto);
            $listafiltrada=$venta->products->pluck('nombre');
            $total=$venta->products->pluck('precioVenta')->sum();
            $contando=$listafiltrada->countBy();
            $coleccion=collect($contando);
            $personalizado=collect();
    
            foreach($coleccion as $nombre=>$cantidad)
            {
                $producto=Product::where('nombre',$nombre)->first();
               $subtotal=$producto->precioVenta*$cantidad;
                $personalizado->prepend(['nombre'=>$nombre,'cantidad'=>$cantidad,'precio'=>$producto->precioVenta,'subtotal'=>$subtotal,'id'=>$producto->id,'idventa'=>$venta->id]);
    
            }     
            return response($personalizado);  
        }
        else
        {
            echo 'agotado';
        }
        
    }
}
