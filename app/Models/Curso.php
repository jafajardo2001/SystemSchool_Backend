<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';
    protected $fillable = [
        'nombre',
        'codigo',
        'descripcion',
        'estado',
        'created_at',
        'updated_at',
    ]; 
}
