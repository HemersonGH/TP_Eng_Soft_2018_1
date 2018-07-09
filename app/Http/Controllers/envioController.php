<?php

namespace App\Http\Controllers;

use App\Envio;

use Auth;
use DB;

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


    	DB::update('UPDATE envios SET status ="'.$request->input('status').'", comentario ="'.$request->input('comentario').'" WHERE id_aluno ='.$request->input('id_aluno'). ' and id_atividade_alocada ='. $request->input('id_atividade_alocada'));

    	if ($request->input('status') == "correto"){
    	    DB::statement("INSERT INTO trofeus (id_atividade_alocada, id_aluno, type) VALUES (".$request->input('id_atividade_alocada').",".$request->input('id_aluno').",'g')");
        }
    	/*$envio = Envio::where('id_atividade_alocada', '=', $request->input('id_atividade_alocada'))->where('id_aluno', '=', $request->input('id_aluno'))->get();

    	$envio->status = $request->input('status');
    	$envio->comentario = $request->input('comentario');

    	$envio->save();*/

        return redirect('home');
    }

    public function view(Request $request){
    	$user = Auth::user();
    	$envio = Envio::where('id_atividade_alocada', '=', $request->input('id_atividade_alocada'))->where('id_aluno', '=', $request->input('id_aluno'))->get();
    //	$atividade = DB::statement('SELECT * FROM ')


    	return view('atividade')->with(['usuario' => $user, 'envio' => $envio[0]]);
    //	return $envio;
    }
}
