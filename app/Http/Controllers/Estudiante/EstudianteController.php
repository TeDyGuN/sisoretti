<?php namespace App\Http\Controllers\Estudiante;

use App\Curso;
use App\Estudiante;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Materia;
use App\Nota;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF;
use Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class EstudianteController extends Controller{
    public function index()
    {
        return view('Estudiante/index');
    }
    public function ViewNotas()
    {
        $notas_est = array();
        $materias = Materia::join('curso as c', 'id_curso', '=', 'c.id')
            ->join('estudiante as e', 'c.id', '=', 'e.id_curso')
            ->select('materias.id', 'materias.asignatura')
            ->where('e.id_user', Auth::user()->id)
            ->get();
        $notas = Nota::join('estudiante as e', 'id_estudiante', '=', 'e.id')
            ->join('users as u', 'e.id_user', '=', 'u.id')
            ->select('nota' ,'periodo', 'id_materia')
            ->where('u.id',Auth::user()->id)
            ->get();
        foreach($materias as $m)
        {
            array_push($notas_est,["m_id" => $m->id, "m_nombre"=> $m->asignatura, "primer"=>0, "segundo"=>0
                , "tercer"=>0, "prom"=>0]);
        };
        foreach($notas as $n)
        {
            $ind = 0;
            for($i=0;$i<count($notas_est);$i++)
            {
                if($notas_est[$i]['m_id'] == $n->id_materia)
                {
                    $ind = $i;
                    break;
                }
            }
            if($n->periodo == 1)
            {
                $notas_est[$ind]['primer'] = $n->nota;
            }
            elseif($n->periodo == 2)
            {
                $notas_est[$ind]['segundo'] = $n->nota;
            }
            elseif($n->periodo == 3)
            {
                $notas_est[$ind]['tercer'] = $n->nota;
            }

        };
        for($i=0;$i<count($notas_est);$i++)
        {

            $notas_est[$i]["prom"] = (intval($notas_est[$i]['primer']) + (intval($notas_est[$i]['segundo']) + (intval($notas_est[$i]['tercer']))))/3.0;
        };
        return view('Estudiante/Notas', compact('notas_est'));
    }
}