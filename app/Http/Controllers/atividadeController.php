<?php

namespace App\Http\Controllers;

use App\User;

use DB;
use Auth;
use Illuminate\Http\Request;

class atividadeController extends Controller
{
    public function view($id_disciplina, $id){
    	$user = Auth::user();
        if(User::isProfessor($user)){

            return "Hi, teacher! <DEBUG>";
        }

        else{
        	$atividade = DB::select('SELECT a.nome, a.descricao, aa.id, aa.data_entrega, d.tipo_trofeu, d.tipo_atividade FROM atividades AS a, atividades_alocadas AS aa, disciplinas AS d WHERE a.id ='.$id.' AND aa.id_atividade = a.id  AND aa.id_disciplina ='.$id_disciplina.' AND d.id='.$id_disciplina);
        	$envio = DB::select('SELECT * FROM envios WHERE id_aluno ='. $user->id .' and id_atividade_alocada ='. $atividade[0]->id);

        	
        	# GAMBIARRA
        	if ($envio == NULL) {
        		return view('atividade')->with(['atividade' => $atividade[0], 'usuario' => $user, 'envio' => $envio]);
        	}

        	else
        		return view('atividade')->with(['atividade' => $atividade[0], 'usuario' => $user, 'envio' => $envio[0]]);
        }
    }
}
