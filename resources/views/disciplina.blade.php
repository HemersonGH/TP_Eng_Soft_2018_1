@extends('layouts.master')

@section('title', 'Home')

@section('content')
<div class="container" style="margin-top:30px">
        <div class="row rowElementos text-center mb-4">
            <div id="titulo" class="col-sm-12">
                <!--Deverão ser adicionadas aqui o código e nome da disciplina presentes no BD -->
                <h1>{{ $disciplina->nome }}</h1>
            </div>
        </div>
        <div class="row rowElementos" >
            <div class="col-sm-3 discOp">  
                <div class="row">
                    <div class="col-sm-12">
                            <a href="#"><div id="opMenuDisc">Atividades em Alteração</div></a>
                            <a href="disciplinaAluno.html"><div id="opMenuDisc">Atividades em Andamento</div></a>
                            <a href="#"><div id="opMenuDisc">Atividades Finalizadas</div></a>
                            <a href="#"><div id="opMenuDisc">Atividades Enviadas</div></a>
                    </div>
                </div>
            </div>
            <!--Deverão ser adicionadas aqui as atividades da disciplina presentes no BD-->
            <!--O modelo será: Código Atividade - Nome Atividade - Descrição Atividade-->
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-12 mb-3" id="tituloOp">
                        <h4>Atividades em Andamento</h4>
                    </div>
                </div>
                <div class="row">
                    @foreach ($atividades as $atividade)
                        <div class="col-sm-4">
                                <div id="opDisciplina">
                                    <a href="{{ route('atividade.view', ['id' => $atividade->id, 'id_disciplina' => $disciplina->id]) }}"><h5>{{ $atividade->nome }}</h5></a>
                                    <p class="text-muted">{{ $atividade->descricao }}</p>
                                </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
