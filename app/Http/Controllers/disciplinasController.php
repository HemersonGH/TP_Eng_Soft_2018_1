<?php

namespace App\Http\Controllers;

use App\Disciplina;
use DB;
use Auth;

use Illuminate\Http\Request;

class disciplinasController extends Controller
{
   public function view($type_disciplinas){

    	if($type_disciplinas == 'matriculadas'){
    		$user = Auth::user();
    		$list_disciplinas = DB::select('SELECT d.nome, d.id
											FROM disciplinas AS d, users AS u, alunos AS a
											WHERE d.id = a.id_disciplina and u.id ='.$user->id);
    		return view('disciplinas')->with(['disciplinas' => $list_disciplinas, 'type_disciplinas' => 'matriculadas']);
    	}
    }

}
