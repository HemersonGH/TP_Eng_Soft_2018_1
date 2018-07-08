<?php

namespace App\Http\Controllers;

use App\Atividade;
use App\AtividadeAlocada;
use Illuminate\Http\Request;
USE DB;


class atividadesAlocadasController extends Controller
{
    public function store(Request $request){

        $alocada = new AtividadeAlocada;
        $alocada->data_entrega = $request->input('data_entrega');
        $alocada->id_atividade = $request->input('id_atividade');
        $alocada->status = 'alteração';
        $alocada->id_disciplina =$request->input('id_disciplina');
        $alocada->save();

        return redirect()->route('disciplina.view', ['id' => $request->input('id_disciplina')]);
    }

    public function create($id){
        $atividades = Atividade::orderBy('nome')->get();

        return view('cadastro_atividade_alocada')->with(['atividades' => $atividades, 'id_disciplina' => $id]);
    }
}
