<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiantes';
    protected $fillable = [
        'usuario_id',
        'matricula',
        'carrera_programa',
        'tipo',
        'estado',
        'created_at',
        'updated_at',
    ];
}
