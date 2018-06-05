<?php

namespace App\Http\Controllers;

use App\Envio;

use Illuminate\Http\Request;

class envioController extends Controller
{
    public function store(Request $request){

    	$envio = new Envio;

    	$envio->id_atividade_alocada = $request->input('id_atividade_alocada');
    	$envio->id_aluno = $request->input('id_aluno');
    	$envio->answer = $request->file('answer');
    	$request->file('answer')->storeAs('pdf', 'teste.pdf');
    	$envio->status = 'não avaliado';
    	$envio->comentario = "";

    	$envio->save();

    	return redirect()->back();
    }

    public function update(Request $request){
    }
}
