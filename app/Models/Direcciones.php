<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Direcciones extends Model
{
     protected $table = 'direcciones';
    
    protected $fillable = ['calle', 'ciudad', 'estado', 'priority','usuario_id'];
}
