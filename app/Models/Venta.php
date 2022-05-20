<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Detalle_venta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Venta extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','total'
     ];
     public function detalles()
    {
        return $this->hasMany(Detalle_venta::class);
    }
    public function detalle()
    {
        return $this->hasOne(Detalle_venta::class);
    }
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
