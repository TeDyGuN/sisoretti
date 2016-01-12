<?php
/**
 * Created by PhpStorm.
 * User: ted
 * Date: 25-06-15
 * Time: 10:52 PM
 */

namespace App\Http\Controllers\Sistema;


use App\Http\Controllers\Controller;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


class LoginController extends  Controller{
    public function loginExitoso()
    {
        if(Auth::user()->estado() == 0)
        {
            Auth::logout();
            return Redirect::to('/auth/login')->withErrors(['Usuario Desactivado', 'The Message']);
        }
        if(Auth::user()->tipo() == 'Administrador')
        {
            return redirect('admin/home');
        }
        elseif(Auth::user()->tipo() == 'Estudiante')
        {
            return redirect('estudiante/home');
        }
        elseif(Auth::user()->tipo() == 'Docente' )
        {
            return redirect('docente/home');
        }
        elseif(Auth::user()->tipo() == 'Secretaria' )
        {
            return redirect('secretaria/home');
        }
        elseif(Auth::user()->tipo() == 'Director' )
        {
            return redirect('director/home');
        }
    }
    /*public function nuevoTrabajo()
    {
        $result = \DB::table('lineaInvestigacion')
            ->select('id','Categoria')
            ->get();
        return view('pages/File', compact('result'));
    }*/
}