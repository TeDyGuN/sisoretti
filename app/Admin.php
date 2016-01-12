<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'administrador';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['antiguedad', 'id_user'];
}
