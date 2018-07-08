<?php
/**
 * Created by PhpStorm.
 * User: melo
 * Date: 08/07/2018
 * Time: 16:39
 */
?>

@extends('layouts.master')

@section('title', 'Novo cadastro')

@section('content')
    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-12" align="middle">
                <h2>Criação de Atividade</h2>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-12">
                    <form id="form" action="{{ route('atividade.store') }}" method="POST">
                        {{ csrf_field()  }}
                        <div class="form-group">
                          <label >Nome:</label>
                          <input name="nome" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Descrição:</label>
                          <textarea name="descricao" class="form-control" rows="3"></textarea>
                        </div>
                        <!--<div class="form-group">
                            <label for="tipo_trofeu">Tipo de Troféu:</label>

                            <select name="tipo_trofeu" class="form-control" id="sel1">
                                <option>Opção 1</option>
                                <option>Opção 2</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="data_entrega">Prazo de Entrega:</label>
                            <input name="data_entrega" class="form-control" type="datetime-local" value="0000-00-00T00:00:00"/>
                        </div>
                        -->
                        <div align="middle">
                            <button id="btn" type="submit" class="btn">Criar Atividade</button>
                        </div>
                    </form>
            </div>
        </div>
</div>
@endsection