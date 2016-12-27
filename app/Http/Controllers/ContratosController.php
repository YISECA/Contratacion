<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
// la clase se crea  por cmd 
class ContratosController extends Controller
{
     public function index()
	{
	//Contratos = Contratos.blade(vistas-view)
		return view('Contratos');
	}
}
