<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $table = 'director';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['antiguedad', 'id_user'];
}
