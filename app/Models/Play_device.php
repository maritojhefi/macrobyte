<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Play_device extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre','id_reproductor','estado'
    ];
}
