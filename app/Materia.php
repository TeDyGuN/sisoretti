<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = 'materia';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['asignatura', 'sigla', 'id_docente', 'id_curso'];
}
