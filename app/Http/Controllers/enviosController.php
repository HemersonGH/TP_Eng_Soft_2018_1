<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Auth;
use DB;

/**
 * Class enviosController
 * @package App\Http\Controllers
 */
class enviosController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view(){

    	$user = Auth::user();
        $envios = DB::select('SELECT e.*
                              FROM disciplinas AS d, users AS u, atividades_alocadas AS a, envios AS e 
                              WHERE u.id = '. $user->id .' and u.id = d.id_professor and d.id = a.id_disciplina and a.id = e.id_atividade_alocada and e.status = "não avaliado";');
        // GAMBIARRA
        foreach ($envios as $envio){
        	$nomes[] = DB::select('SELECT name FROM users WHERE id = '. $envio->id_aluno);
        	$disciplinas[] = DB::select('SELECT d.nome FROM disciplinas AS d, atividades_alocadas AS a WHERE a.id = '. $envio->id_atividade_alocada .' and a.id_disciplina = d.id');

        }

        return view('envios', ['envios' => $envios, 'nomes' => $nomes, 'disciplinas' => $disciplinas]);

    }
}
