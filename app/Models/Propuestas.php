<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class propuestas extends Model
{
    protected $table = ['titulo', 'descripcion', 'estado', 'linea_id', 'posted_by', 'created_at'];


    public function posted_by()
    {
        return $this->hasOne(User::class, 'name', 'id');
    }
    public function linea_id()
    {
        return $this->hasOne(Lineas::class, 'name', 'id');
    }

   
}
