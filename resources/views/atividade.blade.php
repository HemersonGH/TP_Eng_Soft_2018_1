@extends('layouts.master')

@section('title', 'Home')

@section('content')


<!-- GAMBIARRA -->
<style>
    
  #btnUsuario{
      background-color: #fff0c9;
      color: black;
  }
  #btn{
      background-color: #c19a25;
      color: white;
  }
  #format{
      width: 800px;
      margin-left: auto;
      margin-right: auto;  
  }
  #titulo{
      font-size: 20px;
      font-weight: bold;
  }
  #antesBtn{
      padding-top: 25px;
  }

</style>


@if ($usuario->type == '1')
    
    <h5>Envio:</h5>
    {{$envio->answer}}
    <br>
    <br>
    <br>
    <form id="formProfessor" action="{{ route('envio.update') }}" method="POST">
        {{ csrf_field()  }}
        <input type="hidden" name="id_atividade_alocada" value='{{ $envio->id_atividade_alocada }}'>
        <input type="hidden" name="id_aluno" value='{{ $envio->id_aluno }}'>
        <input type="radio" name="status" value="correto" checked> Correto<br>
        <input type="radio" name="status" value="incorreto"> Incorreto<br>
        
        <label>Comentário</label>
        <textarea form="formProfessor" name="comentario"></textarea>
        <button type="submit">Corrigir</button>
    </form>       


    

@else

<div class="row">
            <div class="col-sm-12" align="middle">
                <!--Deverá ser adicionado o nome da atividade disponível no BD-->
                <h2>{{ $atividade->nome }}</h2>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top:30px" id="format">
        <div class="row">
            <div class="col-sm-12">
                 <!--Deverão ser adicionados aqui as informações da atividade disponível no BD-->
                <p><div id="titulo">Descrição: </div>{{ $atividade->descricao }}.</p>    
                <p><div id="titulo">Prazo da entrega:</div>{{ $atividade->data_entrega }}</p>
                <p><div id="titulo">Troféu: </div> {{ $atividade->tipo_trofeu }}</p>
                <p><div id="titulo">Tipo da atividade: </div>{{ $atividade->tipo_atividade}}</p>
                 <!--if envi-->
                @if ($envio == NULL)
                    Você ainda não realizou o envio desta atividade!

                @else
                    @if ($envio->status == "não avaliado")

                        Professor ainda não avaliou sua submissão

                        {{$envio->answer}}

                    @else
                        Status: {{ $envio->status }}
                        <p><div id="titulo">Comentários do Professor: </div>{{ $envio->comentario }} </p>

                    @endif

                @endif

                
            </div>
        </div>
        @if ($envio == NULL)
        <div class="row">
            <div class="col-sm-12">
                <form action="{{ route('envio.store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field()  }}
                        <input type="hidden" name="id_aluno" value="{{ $usuario->id }}">
                        <input type="hidden" name="id_atividade_alocada" value="{{ $atividade->id }}">
                        <input type="file" class="form-control-file" aria-describedby="fileHelp" name="answer">
                        <div align="middle" id="antesBtn">
                                <button id="btn" type="submit" class="btn">Enviar Atividade</button>
                        </div>
                </form>
            </div>
        </div>    
        @endif
    </div>
@endif
@endsection