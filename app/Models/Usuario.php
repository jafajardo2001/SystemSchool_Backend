<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'password',
        'telefono',
        'direccion',
        'fecha_nacimiento',
        'rol',
        'estado',
        'created_at',
        'updated_at',
        'institucion_id',
    ];
    protected $hidden = [
        'password',
        'remember_token'
    ];
}

