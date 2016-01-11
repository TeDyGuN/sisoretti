<?php
/**
 * Created by PhpStorm.
 * User: TedyPc
 * Date: 10/29/2015
 * Time: 4:09 p.m.
 */

namespace App\Http\Controllers\Admin;


use App\Estudiante;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Kardex;
use app\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class UsuarioController extends Controller
{
    public function director()
    {
        return view('Admin/Creacion/Director');
    }
    public function secretaria()
    {
        return view('Admin/Creacion/Secretaria');
    }
    public function admin()
    {
        return view('Admin/Creacion/Administrador');
    }
    public function docente()
    {
        return view('Admin/Creacion/Docente');
    }
    public function estudiante()
    {
        return view('Admin/Creacion/Estudiante');
    }
    public function modificar()
    {
        return view('Admin/modificar');
    }
    public function save_estudiante(Request $request)
    {
        $k = new Kardex;
        $k->nombres          = $request->nombres;
        $k->ap_paterno       = $request->father;
        $k->ap_materno       = $request->mother;
        $k->ci               = $request->ci;
        $k->sexo             = $request->sexo;
        $k->estado           = 1;
        $k->save();

        $user_id = Kardex::select('id')
            ->where('ci','=',$request->ci)
            ->get();
        $u = new User;
        $u->email            = $request->email;
        $u->password         = \Hash::make($request->ci);
        $u->tipo_usuario     = 1;
        $u->id_kardex        = $user_id[0]->id;
        $u->save();

        $st_id = User::select('id')
            ->where('email', '=', $request->email)
            ->get();
        $e = new Estudiante();
        $e->id_curso    = $request->curso;
        $e->id_user     = $st_id[0]->id;
        $e->save();
        return Redirect::back()->with(['success' => ' ']);
    }
}