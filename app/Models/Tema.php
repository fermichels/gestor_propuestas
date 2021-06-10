<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    protected $fillable = ['propuesta_id','user_id'];


    public function propuesta()
    {
        return $this->belongsTo(Propuestas::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
