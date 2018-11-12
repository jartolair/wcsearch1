<?php

namespace App\Http\Controllers;

use App\Users;
use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Consulta;
use DB;


class EmailController extends Controller
{
    public function enviarConsulta(Request $request){
    	$consulta=new Consulta();
    	$consulta->nombre=$request->input('nombre');
    	$consulta->email=$request->input('email');
    	$consulta->asunto=$request->input('asunto');
    	$consulta->mensaje=$request->input('mensaje');

    	$consulta->save();
    	return view('index');
    	//return "kaixo";
    }
}
