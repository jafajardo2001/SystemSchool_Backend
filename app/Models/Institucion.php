<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    protected $table = 'instituciones';
    protected $fillable = [
        'nombre',        
        'direccion',
        'tipo',
        'estado',
        'created_at',
        'updated_at',
    ];
}
