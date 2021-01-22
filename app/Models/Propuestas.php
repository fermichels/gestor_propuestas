<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class propuestas extends Model
{
    protected $fillable = ['titulo', 'descripcion', 'estado', 'linea_id', 'user_id'];
 

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function linea()
    {
        return $this->belongsTo(Lineas::class);
    }

   
}
