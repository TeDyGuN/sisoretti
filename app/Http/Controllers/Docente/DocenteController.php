<?php namespace App\Http\Controllers\Docente;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class DocenteController extends Controller{
    public function index()
    {
        return view('Docente/index');
    }
}