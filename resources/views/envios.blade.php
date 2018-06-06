@extends('layouts.master')

@section('title', 'Home')

@section('content')
<div class="container" style="margin-top:30px">
        <div class="row rowElementos" >
            
            <div class="col-sm-9">
                    @foreach ($envios as $envio)            
                        <div id="opDisciplina">
                            <form action="{{ route('envio.view') }}" method="POST">
                            {{ csrf_field()  }}
                            <input type="hidden" name="id_aluno" value="{{ $envio->id_aluno }}">  
                            <input type="hidden" name="id_atividade_alocada" value="{{ $envio->id_atividade_alocada }}">
                            <button type="submit"> {{ $nomes[$loop->index][0]->name }} - <strong> {{ $disciplinas[$loop->index][0]->nome }}</strong> </button>
                            </form>
                                <!-- GAMBIARRA -->
                            
                            </a>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
@endsection
