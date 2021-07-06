<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre','numero','minutos','email','contrasena','estado','hora_marcada'
     ];
  
     public function getMinutosAttribute($value){
         
        return round($value/60,2);
    }
    public function getNombreAttribute($value)
{
    return ucfirst($value);
}
}
