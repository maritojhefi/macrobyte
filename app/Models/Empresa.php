<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre','logo','nit','telefono','correo','codigo_banipay'
     ];

     public function getLogoAttribute($value){
        return "images/logos/".$value;
    }
}
