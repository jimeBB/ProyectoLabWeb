<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resena extends Model
{
    use HasFactory;
    public function comentario(){
    return $this->belongsToMany(Comentario::class);
        }
    
}