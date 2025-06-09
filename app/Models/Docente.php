<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table = 'docentes';
    protected $fillable = [
        'usuario_id',
        'especialidad',
        'rol_secundario',
        'estado',
        'created_at',
        'updated_at',
    ];  
}
