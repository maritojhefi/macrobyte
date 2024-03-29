<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spotify_token extends Model
{
    use HasFactory;
    protected $fillable = [
        'token','user_id','refresh_token'
     ];

     public function user()
    {
        return $this->belongsTo(User::class);
    }
}
