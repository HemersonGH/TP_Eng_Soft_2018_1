<?php
/**
 * Created by PhpStorm.
 * User: melo
 * Date: 10/07/2018
 * Time: 16:40
 */
?>

@extends('layouts.master')

@section('title', 'Novo cadastro')

@section('content')

<!--Título da página: Cadastro de Disciplina-->
<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-sm-12" align="middle">
            <h2>Cadastro de Disciplina</h2>
        </div>
    </div>
</div>

<!--Formulário para cadastro de disciplina-->
<div class="container my-3" style="margin-top:30px">
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('disciplina.store') }}" method="POST">
            {{ csrf_field()  }}

                <input type="hidden" name="id_professor" value="{{  $id_professor }}">
                <!--Elemento do form: caixa de texto para nome da disciplina-->
                <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" name="nome" class="form-control">
                </div>

                <!--Elemento do form: caixa de texto para código da disciplina-->
                <div class="form-group">
                    <label>Código:</label>
                    <input type="text" name="codigo" class="form-control">
                </div>

                <!--Elemento do form: caixa de texto para descrição da disciplina-->
                <div class="form-group">
                    <label>Descrição:</label>
                    <textarea class="form-control" name="descricao" rows="2"></textarea>
                </div>

                <!--Elemento do form: Dropdown com opções do tipo de troféu atribuído na disciplina-->
                <div class="form-group">
                   <label for="tipo_trofeu">Tipo de Troféu:</label>

                   <select name="tipo_trofeu" class="form-control" id="sel1">
                       <option>unitario</option>
                       <option>pontos</option>
                   </select>
                </div>

                <!--Elemento do form: Dropdown com opções do tipo de atividade da disciplina-->
                <div class="form-group">
                    <label for="tipo_atividade">Tipo de Atividade:</label>

                    <select name="tipo_atividade" class="form-control" id="sel1">
                        <option>individual</option>
                        <option>grupo</option>
                    </select>
                </div>

                <!--Elemento do form: botão cadastrar disciplina-->
                <div align="middle">
                    <button id="btn" type="submit" class="btn">Cadastrar Disciplina</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
