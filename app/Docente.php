<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table = 'Docente';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['antiguedad', 'id_user'];
}
