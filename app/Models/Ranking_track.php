<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ranking_track extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre','artista', 'uri', 'imagen','like','dislike','reproducido','foto'
    ];
}
