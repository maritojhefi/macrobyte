<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasante extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre','cedula','telefono','nacimiento','estudios','foto','photoshop','office','redes','marketing','edicionvideos','poseecompu','tarijeno','menora25','practica'
     ];
}
