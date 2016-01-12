<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use App\Secretaria;
use App\Kardex;

class User extends Model implements AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['email', 'password',  'tipo_usuario', 'id_kardex'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function tipo()
    {
        switch ($this->tipo_usuario)
        {
            case 1:
                return 'Estudiante';
            case 2:
                return 'Docente';
            case 3:
                return 'Administrador';
            case 4:
                return 'Director';
            case 5:
                return 'Secretaria';
        }
    }
    public function paterno()
    {
        $datos = Kardex::select('nombres', 'ap_paterno')
                ->where('id', '=', $this->id_kardex)
                ->get();
        return $datos[0]->nombres.' '.$datos[0]->ap_paterno;
    }
    public function apellido()
    {
        $datos = Kardex::select('nombres', 'ap_paterno', 'ap_materno')
            ->where('id', '=', $this->id_kardex)
            ->get();
        return $datos[0]->nombres.' '.$datos[0]->ap_paterno.' '.$datos[0]->ap_materno;
    }
    public function ci()
    {
        $datos = Kardex::select('ci')
            ->where('id', '=', $this->id_kardex)
            ->get();
        return $datos[0]->ci;
    }
    public function estado()
    {
        $datos = Kardex::select('estado')
            ->where('id', '=', $this->id_kardex)
            ->get();
        return $datos[0]->estado;
    }

}
