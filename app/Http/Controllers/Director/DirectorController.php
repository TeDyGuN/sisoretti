<?php namespace App\Http\Controllers\Director;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class DirectorController extends Controller{
    public function index()
    {
        return view('Director/index');
    }
}