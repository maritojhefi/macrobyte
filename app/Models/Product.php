<?php

namespace App\Models;

use App\Models\Venta;
use App\Models\Detalle_venta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre','category_id','compra_id','stock_id','codigoBarra','imagen','codigoProducto','cantidad','precioVenta'
     ];

     public function getImagenAttribute($value){
        return "images/".$value;
    }
   
    public function ventas()
    {
        return $this->belongsToMany(Venta::class);
    }

}
