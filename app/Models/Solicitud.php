<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Solicitud extends Model
{
    protected $fillable = ['descripcion', 'propuesta_id', 'user_id', 'tutor_id'];


    public function propuesta()
    {
        return $this->belongsTo(Propuestas::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeByUser(Builder $query, int $id)
    {
        return $query->whereHas('user', function ($user) use ($id) {
            $user->where('id', $id);
        });
    }
    public function scopePropuesta($query)
    {
        return $query->where('visible', true);
    }
}
