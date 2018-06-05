<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Illuminate\Http\Request;

class atividadeController extends Controller
{
    public function view($id_disciplina, $id){
    	$user = Auth::user();
    	$atividade = DB::select('SELECT a.nome, a.descricao, aa.data_entrega, d.tipo_trofeu, d.tipo_atividade FROM atividades AS a, atividades_alocadas AS aa, disciplinas AS d WHERE a.id ='.$id.' AND aa.id_disciplina ='.$id_disciplina.' AND d.id='.$id_disciplina);

    	return view('atividade')->with(['atividade' => $atividade[0], 'type_usuario' => $user->type]);

    }
}
