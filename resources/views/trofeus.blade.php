<?php
/**
 * Created by PhpStorm.
 * User: melo
 * Date: 09/07/2018
 * Time: 00:12
 */
?>

@extends('layouts.master')

@section('title', 'Troféus')

@section('content')
    <div class="container" style="margin-top:30px">
        <div class="row rowElementos" >
            <!--Deverão ser adicionadas aqui as disciplinas que o aluno está matriculada presentes no BD-->
            <!--O modelo será: Código Disciplina - Nome Disciplina - Professor Disciplina - Descrição Disciplina-->
            <div class="col-sm-12">
                @foreach ($trofeus as $trofeu)
                    <div id="opDisciplina">
                        <div class="card col-3">

                            <div class="card-body ">


                                <p> <span class="text-info">Atividade:</span> {{ $trofeu->nome_atividade }}</p>
                                <p> <span class="text-info">Disciplina:</span> {{ $trofeu->nome_disciplina }}</p>
                                <p> <span class="text-info">Professor(a):</span> {{ $trofeu->nome_professor }}</p>

                                <div class="text-center">
                                @if ($trofeu->type == 'g')
                                    <img src="{{asset('img/trophies/g.png')}}" alt="Golden trophy">
                                    <p class="text-muted">OURO!</p>
                                @elseif ($trofeu->type == 's')
                                    <img src="{{asset('img/trophies/g.png')}}" alt="Golden trophy">
                                @else
                                    <img src="{{asset('img/trophies/g.png')}}" alt="Golden trophy">
                                @endif
                                </div>

                            </div>


                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
