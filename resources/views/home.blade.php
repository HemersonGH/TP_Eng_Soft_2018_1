@extends('layouts.master')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                    <div class="row">
                        <div class="col-sm-12 mt-2 mb-4 text-center">
                            <h1>Disciplinas</h1>
                        </div>
                    </div>
                @if ($type == "aluno")
                    
                    <div class="row text-center">
                        <div class="col-sm-4">  
                                <a href=" {{ route('disciplinas.view', ['disciplinas' => 'matriculadas']) }}"><div class="fakeimg"> <div class="mt-4 display-4 text-dark"> Disciplinas matriculadas</div> </div></a>
                        </div>
                        <div class="col-sm-4">  
                                <a href="#"><div class="fakeimg" style="height: 16rem"> <div class="mt-4 display-4 text-dark"> Disciplinas não Matriculadas</div> </div></a>
                        </div>
                        <div class="col-sm-4">  
                                <a href="#"><div class="fakeimg"> <div class="mt-4 display-4 text-dark"> Disciplinas Finalizadas</div> </div></a>
                        </div>
                    </div>
                

                @elseif ($type == "professor")
                <div class="row text-center">
                    <div class="col-sm-4">  
                            <a href="{{ route('disciplinas.view', ['disciplinas' => 'minhas']) }}"><div class="fakeimg"> <div class="mt-4 display-4 text-dark">Minhas Disciplinas</div> </div></a>
                    </div>
                    <div class="col-sm-4">
                            <a href="#"><div class="fakeimg"> <div class="mt-4 display-4 text-dark">Outras Disciplinas</div> </div></a>
                    </div>
                    <div class="col-sm-4">
                            <a href="#"><div class="fakeimg"> <div class="mt-4 display-4 text-dark">Disciplinas Finalizadas</div> </div></a>
                    </div>
                </div>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
