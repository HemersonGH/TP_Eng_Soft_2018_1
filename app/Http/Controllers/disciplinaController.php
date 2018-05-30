<?php

namespace App\Http\Controllers;

use App\Disciplina;
use DB;
use Auth;
use Illuminate\Http\Request;

class disciplinaController extends Controller
{
    
    public function view($id){
    	$user = Auth::user();
    	$disciplina = DB::select('SELECT * FROM disciplinas WHERE id ='.$id);

    	$list_atividades = DB::select('SELECT a.nome, a.descricao, a.id
									   FROM disciplinas AS d, atividades_alocadas AS aa, atividades AS a
									   WHERE a.id = aa.id_atividade and d.id=aa.id_disciplina and d.id='.$id);

    	return view('disciplina')->with(['disciplina' => $disciplina[0], 'atividades' => $list_atividades, 'type_usuario' => $user->type]);
    }	

    
}
