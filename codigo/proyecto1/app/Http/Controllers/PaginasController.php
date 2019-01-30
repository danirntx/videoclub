<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class PaginasController extends Controller
{
public function nosotros (){
	$nombre='Julio';
	return view('nosotros')->with('nombreenviado',$nombre);
}
public function contacto (){
//return "Nosotros desde el controlador";
return view('contacto')->with ([
'nombre'=>'Ana',
'apellido'=>'Molero'
]);
}
}