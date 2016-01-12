<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secretaria extends Model
{
    protected $table = 'secretaria';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['antiguedad', 'id_user'];
}
