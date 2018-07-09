<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use DB;

class trofeusController extends Controller
{
    public function show(){
        $user = Auth::user();

        $trofeus = DB::select('SELECT t.*, d.nome as nome_disciplina, a.nome as nome_atividade, u.name as nome_professor
                                FROM trofeus AS t, atividades_alocadas AS aa, disciplinas AS d, atividades AS a, users as u
                                WHERE u.id = d.id_professor and aa.id_disciplina = d.id and aa.id_atividade = a.id and t.id_atividade_alocada = aa.id and t.id_aluno ='.$user->id);

        return view('trofeus')->with(['trofeus' => $trofeus]);

    }
}
