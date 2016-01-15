<?php namespace App\Http\Controllers\Docente;

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
class DocenteController extends Controller{
    public $este;
    public $subir;
    public $n = 13;
    public function index()
    {
        return view('Docente/index');
    }
    public function subir_notas()
    {
        $materias = Materia::join('docente as d', 'id_docente', '=', 'd.id')
            ->join('users as u', 'd.id_user', '=', 'u.id')
            ->join('kardex as k', 'u.id_kardex', '=', 'k.id')
            ->join('curso as c', 'materias.id_curso', '=', 'c.id')
            ->select('materias.id as m_id','materias.asignatura as m_as', 'materias.sigla as m_sigla', 'c.nombre as c_nombre', 'c.id as cid')
            ->where('u.id', '=', Auth::user()->id)
            ->get();
        return view('Docente/SubirNotas', compact('materias'));
    }
    public function descargar_notas(Request $request)
    {
        $this->este = $request;
        Excel::load('LibroGoretti.xlsx', function($doc) {
            $materia = Materia::select('id_curso', 'asignatura')
                ->where('id', '=', $this->este->id)
                ->get();
            $est = Estudiante::join('users as u', 'id_user', '=', 'u.id')
                ->join('kardex as k', 'u.id_kardex', '=', 'k.id')
                ->select('k.ci', 'k.nombres', 'k.ap_paterno', 'k.ap_materno')
                ->where('estudiante.id_curso', '=', $this->este->c_id)
                ->get();
            $sheet = $doc->setActiveSheetIndex(0);
            $sheet->setCellValue('B9', $this->este->c_nombre);
            $sheet->setCellValue('B10', count($est));
            $sheet->setCellValue('B11', $materia[0]->asignatura);

            foreach ($est as $e) {
                $sheet->setCellValue('A'.$this->n, $e->ci);
                $sheet->setCellValue('B'.$this->n, $e->nombres);
                $sheet->setCellValue('C'.$this->n, $e->ap_paterno);
                $sheet->setCellValue('D'.$this->n, $e->ap_materno);
                $sheet->getStyle('A'.$this->n.':D'.$this->n)->applyFromArray(
                    array(
                        'fill' => array(
                            'type' => \PHPExcel_Style_Fill::FILL_SOLID,
                            'color' => array('rgb' => '215967')
                        ),
                        'font'  => array(
                            'color' => array('rgb' => 'FFFFFF'),
                            'size'  => 14
                        )
                    )
                );

                $this->n = $this->n + 1;
            }
        })->download('xlsx');
    }

    public function View_Plantilla()
    {
        $materias = Materia::join('docente as d', 'id_docente', '=', 'd.id')
            ->join('users as u', 'd.id_user', '=', 'u.id')
            ->join('kardex as k', 'u.id_kardex', '=', 'k.id')
            ->join('curso as c', 'materias.id_curso', '=', 'c.id')
            ->select('materias.id as m_id','materias.asignatura as m_as', 'c.nombre as c_nombre', 'c.id as c_id')
            ->where('u.id', '=', Auth::user()->id)
            ->get();
        return view('Docente/SubirPlantilla', compact('materias'));
    }
    public function subir_plantilla(Request $request)
    {
        $this->subir = $request;
        //obtenemos el campo file definido en el formulario
        $file = $request->file('archivo');
        //obtenemos el nombre del archivo
        $nombre = $file->getClientOriginalName();

        $url = storage_path('app/').$nombre;
        $messages = [
            'mimes' => 'Solo se permiten Archivos Excel .xls, .xlsx',
        ];
        $validator = Validator::make(
            [
                'file' => $file,
                'nombre' => $nombre
            ],
            [
                'file' => 'mimes:xls,xlsx'
            ],
            $messages);
        $message = 'f';
        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator);
        }
        \Storage::disk('local')->put($nombre,  \File::get($file));


        Excel::load($url, function($reader) {
            $id_docente = Materia::select('id_curso','id_docente')
                ->where('id','=',$this->subir->materia)
                ->get();
            $est = Estudiante::join('users as u', 'id_user', '=', 'u.id')
                ->join('kardex as k', 'u.id_kardex', '=', 'k.id')
                ->select('k.ci', 'estudiante.id', 'estudiante.id_curso')
                ->where('estudiante.id_curso', '=', $id_docente[0]->id_curso)
                ->get();
            $results = $reader->get();
            for ($i = 11; $i < count($est) + 11; $i++) {
                $n = new Nota();
                $n->periodo         = $this->subir->periodo;
                $n->nota            = $results[$i][4];
                $n->id_estudiante   = $est[$i-11]->id;
                $n->id_docente      = $id_docente[0]->id_docente;
                $n->id_curso        = $id_docente[0]->id_curso;
                $n->id_materia      = $this->subir->materia;
                $n->save();
            }
        });
        $id_docente = Materia::select('id_curso','id_docente')
            ->where('id','=',$this->subir->materia)
            ->get();
        $est = Estudiante::join('users as u', 'id_user', '=', 'u.id')
            ->join('kardex as k', 'u.id_kardex', '=', 'k.id')
            ->join('notas as n', 'estudiante.id', '=', 'n.id_estudiante')
            ->select('estudiante.id as e_id','k.ci as ci', 'k.nombres as nombre', 'k.ap_paterno as pat', 'k.ap_materno as mat','n.nota as nota')
            ->where('estudiante.id_curso', '=', $id_docente[0]->id_curso)
            ->where('n.id_materia',$this->subir->materia)
            ->where('n.periodo', $this->subir->periodo)
            ->get();
        $datos = Materia::join('docente as d', 'id_docente', '=', 'd.id')
            ->join('users as u', 'd.id_user', '=', 'u.id')
            ->join('kardex as k', 'u.id_kardex', '=', 'k.id')
            ->join('curso as c', 'materias.id_curso', '=', 'c.id')
            ->select('materias.asignatura as m_as', 'c.nombre as c_nombre','k.nombres as p_nom','k.ap_paterno as p_pat', 'k.ap_materno as p_mat')
            ->where('u.id', '=', Auth::user()->id)
            ->get();
        $view =  \View::make('Docente.ReportesNotas', compact('est', 'datos'))->render();
        $pdf = \App::make('dompdf.wrapper'); //Note: in 0.6.x this will be 'dompdf.wrapper'
        $pdf->loadHTML($view)->setPaper('letter')->setOrientation('landscape');
        $carbon = new Carbon();
        return $pdf->download('Reporte_Usuarios_'.$carbon->now(new \DateTimeZone('America/La_Paz'))->toDateTimeString().'.pdf');
        //return Redirect::back()->with(['success' => ' ']);
    }
}