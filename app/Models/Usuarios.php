<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table = 'usuarios';

    protected $fillable = ['nombre', 'apellido', 'email', 'birthdate']; 


    public function adress(){
        return $this->hasMany('App\Models\Direcciones');
    }
}
