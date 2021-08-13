<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Tema extends Model
{
    protected $fillable = ['propuesta_id','user_id', 'user_id_2'];


    public function propuesta()
    {
        return $this->belongsTo(Propuestas::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function user_id_2()
    {
        return $this->belongsTo(User::class);
    }



    public function scopeByUser(Builder $query, int $id)
    {
        return $query->whereHas('user', function ($user) use ($id) {
            $user->where('id', $id);
        });
    }
    public function scopeByUser2(Builder $query, int $id)
    {
        return $query->whereHas('user2', function ($user_id_2) use ($id) {
            $user_id_2->where('id', $id);
        });
    }
    public function scopeOfType($query, $id)
    {
        return $query->where('user_id_2', $id);
    }


 }
