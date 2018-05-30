@extends('layouts.master')

@section('title', 'Home')

@section('content')
<div class="container" style="margin-top:30px">
        <div class="row rowElementos text-center mb-4">
            <div id="titulo" class="col-sm-12">
                <h1>Disciplinas {{ $type_disciplinas }}</h1>
            </div>
        </div>
        <div class="row rowElementos" >
            <div class="col-sm-3 discOp">  
                <div class="row">
                    <div class="col-sm-12">
                            <a href=" {{ route('disciplinas.view', ['type_disciplinas' => 'matriculadas']) }}"><div class="lead text-muted text-dark" id="opMenuDisc">Disciplinas Matriculadas</div></a>
                            <a href="#"><div class="lead text-muted text-dark" id="opMenuDisc">Disciplinas Não Matriculadas</div></a>
                            <a href="#"><div class="lead text-muted text-dark" id="opMenuDisc">Disciplinas Finalizadas</div></a>
                    </div>
                </div>
            </div>
            <!--Deverão ser adicionadas aqui as disciplinas que o aluno está matriculada presentes no BD-->
            <!--O modelo será: Código Disciplina - Nome Disciplina - Professor Disciplina - Descrição Disciplina-->
            <div class="col-sm-9">
                    @foreach ($disciplinas as $disciplina)            
                        <div id="opDisciplina">
                            <a class="text-muted" href="{{ route('disciplina.view', ['id' => $disciplina->id]) }}"><h4> {{ $loop->iteration }}- <strong > {{ $disciplina->nome }}</strong> </h4></a>
                            <p>Descrição disciplina, descrição disciplina, descrição disciplina, descrição disciplina, 
                                descrição disciplina, descrição disciplina, descrição disciplina, descrição disciplina,
                                descrição disciplina,descrição disciplina,descrição disciplina.</p>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
@endsection
