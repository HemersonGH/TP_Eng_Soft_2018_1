<?php

namespace App\Http\Controllers;

use App\Disciplina;
use DB;
use Auth;
use Illuminate\Http\Request;

class disciplinaController extends Controller
{
    
    public function view($id){

    	$disciplina = DB::select('SELECT * FROM disciplinas WHERE id ='.$id);

    	$list_atividades = DB::select('SELECT a.nome, a.descricao
									   FROM disciplinas AS d, atividades_alocadas AS aa, atividades AS a
									   WHERE a.id = aa.id_atividade and d.id ='.$id);

    	return view('disciplina')->with(['disciplina' => $disciplina[0], 'atividades' => $list_atividades]);
    }	

    
}
