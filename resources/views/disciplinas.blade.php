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
                        @if ($type_usuario == '0')
                            <a href="{{ route('disciplinas.view', ['type_disciplinas' => 'matriculadas']) }}"><div class="lead text-muted text-dark" id="opMenuDisc">Disciplinas Matriculadas</div></a>
                            <a href="{{ route('disciplinas.view', ['type_disciplinas' => 'nao_matriculadas']) }}"><div class="lead text-muted text-dark" id="opMenuDisc">Disciplinas Não Matriculadas</div></a>
                            <a href="{{ route('disciplinas.view', ['type_disciplinas' => 'finalizadas']) }}"><div class="lead text-muted text-dark" id="opMenuDisc">Disciplinas Finalizadas</div></a>
                        @else 
                            <a href="{{ route('disciplinas.view', ['type_disciplinas' => 'minhas']) }}"><div class="lead text-muted text-dark" id="opMenuDisc">Minhas Disciplinas</div></a>
                            <a href="{{ route('disciplinas.view', ['type_disciplinas' => 'outras']) }}"><div class="lead text-muted text-dark" id="opMenuDisc">Outras Disciplinas</div></a>
                            <a href="{{ route('disciplinas.view', ['type_disciplinas' => 'finalizadas']) }}"><div class="lead text-muted text-dark" id="opMenuDisc">Disciplinas Finalizadas</div></a>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div id="positionBtn">
                                        <form action="{{ route('disciplina.create') }}" method="GET">
                                            {{ csrf_field()  }}
                                            <button id="btn" type="submit" class="my-2 btn" >Cadastrar Nova Disciplina</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <!--Deverão ser adicionadas aqui as disciplinas que o aluno está matriculada presentes no BD-->
            <!--O modelo será: Código Disciplina - Nome Disciplina - Professor Disciplina - Descrição Disciplina-->
            <div class="col-sm-9">
                    @foreach ($disciplinas as $disciplina)            
                        <div id="opDisciplina">
                            @if ($type_disciplinas == 'não matriculadas')
                                <h2 class="text-info" ><h4> {{ $loop->iteration }}- <strong > {{ $disciplina->nome }}</strong> </h4></h2>
                            @else
                                <a class="text-info" href="{{ route('disciplina.view', ['id' => $disciplina->id]) }}"><h4> {{ $loop->iteration }}- <strong > {{ $disciplina->nome }}</strong> </h4></a>
                            @endif

                            <!-- Disciplina->name is the teacher's name -->
                            <p class="text-muted">
                                Professor(a): {{$disciplina->name}}
                            </p>
                            <p>
                                {{$disciplina->descricao}}
                            </p>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
@endsection