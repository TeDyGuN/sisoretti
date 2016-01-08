<?php
/**
 * Created by PhpStorm.
 * User: ted
 * Date: 25-06-15
 * Time: 10:52 PM
 */

namespace App\Http\Controllers\Sistema;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;


class LoginController extends  Controller{
    public function loginExitoso()
    {
        if(Auth::user()->type == 'Admin')
        {
            return redirect('admin/home');
        }
        elseif(Auth::user()->type == 'Tutor')
        {
            return redirect('tutor/home');
        }
        elseif(Auth::user()->type == 'Cursante')
        {
            return redirect('cursante/home');
        }
    }
    public function nuevoTrabajo()
    {
        $result = \DB::table('lineaInvestigacion')
            ->select('id','Categoria')
            ->get();
        return view('pages/File', compact('result'));
    }
}