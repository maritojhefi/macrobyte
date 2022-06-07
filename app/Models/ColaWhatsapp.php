<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ColaWhatsapp extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','atendiendo','conversation_id','conversation_support'
     ];
     public function usuario()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
