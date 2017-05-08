<?php

namespace App\Http\Controllers\Locatario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PrincipalController extends Controller
{
    public function index()
    {
    	return view('locatario/principal/index');
    }
}
