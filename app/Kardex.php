<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kardex extends Model
{
    protected $table = 'kardex';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombres', 'ap_paterno', 'ap_materno', 'ci', 'sexo', 'estado'];

    public function paterno()
    {
        return $this->nombres.' '.$this->ap_paterno;
    }
    public function apellido()
    {
        return $this->nombres.' '.$this->ap_paterno.' '.$this->ap_materno;
    }


}
