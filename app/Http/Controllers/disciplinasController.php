<?php

namespace App\Http\Controllers;

use App\Disciplina;
use DB;
use Auth;

use Illuminate\Http\Request;

class disciplinasController extends Controller{

   public function view($type_disciplinas){
   		$user = Auth::user();

   		// Se for aluno
   		if($user->type == '0'){
   			// Disciplinas matriculadas
	    	if($type_disciplinas == 'matriculadas'){
	    		$list_disciplinas = DB::select('SELECT d.nome, d.id
												FROM disciplinas AS d, users AS u, alunos AS a
												WHERE d.id = a.id_disciplina and u.id = a.id_usuario and u.id='.$user->id);
	    		return view('disciplinas')->with(['disciplinas' => $list_disciplinas, 'type_disciplinas' => 'matriculadas', 'type_usuario' => $user->type]);
	    	}
	    	// Disciplinas não matriculadas
	    	else if($type_disciplinas == 'nao_matriculadas'){
	    		$list_disciplinas = DB::select('SELECT d.nome, d.id
												FROM disciplinas AS d, users AS u, alunos AS a
												WHERE d.id = a.id_disciplina and u.id = a.id_usuario and !u.id='.$user->id);
	    		return view('disciplinas')->with(['disciplinas' => $list_disciplinas, 'type_disciplinas' => 'não matriculadas', 'type_usuario' => $user->type]);
	    	}
	    }

	    // Se for professor/assistente
	    else{
	    	// Disciplinas do professor
	    	if($type_disciplinas == 'minhas'){
	    		$list_disciplinas = DB::select('SELECT d.nome, d.id
												FROM disciplinas AS d, users AS u
												WHERE d.id_professor = u.id AND NOT u.type = 0 AND u.id='.$user->id);
	    		return view('disciplinas')->with(['disciplinas' => $list_disciplinas, 'type_disciplinas' => 'minhas', 'type_usuario' => $user->type]);
	    	}
	    	// Demais disciplinas
	    	else if($type_disciplinas == 'outras'){
	    		$list_disciplinas = DB::select('SELECT d.nome
												FROM disciplinas AS d, users AS u
												WHERE d.id_professor = u.id and NOT u.type = 0 and u.id='.$user->id);
	    		return view('disciplinas')->with(['disciplinas' => $list_disciplinas, 'type_disciplinas' => 'de outros professores', 'type_usuario' => $user->type]);
	    	}
	    }
    }
}
