<?php namespace App\Http\Controllers\Estudiante;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class EstudianteController extends Controller{
    public function index()
    {
        return view('Estudiante/index');
    }
}