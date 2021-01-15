<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lineas extends Model
{
    protected $fillable = ['name', 'description'];


    public $timestamps = false;
}
