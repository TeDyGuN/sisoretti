<?php namespace App\Http\Controllers\Secretaria;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class SecretariaController extends Controller{
    public function index()
    {
        return view('Secretaria/index');
    }
}