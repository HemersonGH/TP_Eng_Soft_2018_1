<?php
/**
 * Created by PhpStorm.
 * User: melo
 * Date: 08/07/2018
 * Time: 18:09
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
                <form id="form" action="{{ route('alocada.store') }}" method="POST">
                    {{ csrf_field()  }}
                    <input type="hidden" value="{{$id_disciplina}}" name="id_disciplina"/>
                    <div class="form-group">
                        <label >Atividade:</label>
                        <div class="row">
                            <div class="col-9">
                                <select name="id_atividade" class="form-control" >
                                    @foreach($atividades as $atividade)
                                        <option value="{{ $atividade->id  }}"> {{$atividade->nome." (".$atividade->descricao.')'}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-3">
                                <a href="{{ route('atividade.create') }}" class="form-control btn btn-outline-success"> Criar nova atividade</a>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data_entrega">Prazo de Entrega:</label>
                        <input name="data_entrega" class="form-control" type="datetime-local" value="2018-06-20 23:55:00"/>
                    </div>

                    <div align="middle">
                        <button id="btn" type="submit" class="btn">Criar Atividade</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
