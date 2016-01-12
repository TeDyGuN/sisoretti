<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $table = 'notas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['periodo', 'nota', 'id_estudiante', 'id_docente', 'id_curso', 'id_materia'];
}
