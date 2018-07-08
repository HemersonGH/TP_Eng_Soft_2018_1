<?php

namespace App\Http\Controllers;

use App\User;
use App\Atividade;

use DB;
use Auth;
use Illuminate\Http\Request;

/**
 * Class atividadeController
 * @package App\Http\Controllers
 */
class atividadeController extends Controller
{
    /**
     * @param $id_disciplina
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
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

    public function create(){
        return view('cadastro_atividade');
    }

    public function store(Request $request){

        $atividade = new Atividade;
        $atividade->nome = $request->input('nome');
        $atividade->descricao = $request->input('descricao');
        $atividade->save();

        return redirect()->back();
    }
}
