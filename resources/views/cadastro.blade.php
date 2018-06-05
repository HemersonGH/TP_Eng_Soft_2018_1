@extends('layouts.master')

@section('title', 'Novo cadastro')

@section('content')   
    <div class="row mb-5">
        <div class="col-sm-12" id="antesForm">
                <form id="formEntrar" action="{{ route('cadastro.store') }}" method="POST">
                   {{ csrf_field()  }}
                          <div class="form-group">
                            <label for="email">Nome:</label>
                            <input type="text" class="form-control" name="name">
                            @if ($errors->has('name'))
                              <div class="error">{{ $errors->first('name') }}</div>
                            @endif
                          </div>
                          <div class="form-group">
                            <label for="pwd">CPF:</label>
                            <input type="text" class="form-control" name="cpf">
                            @if ($errors->has('cpf'))
                              <div class="error">{{ $errors->first('cpf') }}</div>
                            @endif
                          </div>
                          <div class="form-group">
                              <label for="pwd">Data de Nascimento:</label>
                              <input type="date" class="form-control" name="nasc">
                              @if ($errors->has('nasc'))
                                <div class="error">{{ $errors->first('nasc') }}</div>
                              @endif
                          </div>
                          <div class="form-group">
                              <label for="pwd">Instituição:</label>
                              <input type="text" class="form-control" name="institution">
                          </div>
                          <div class="form-group">
                              <label for="pwd">E-mail:</label>
                              <input type="email" class="form-control" name="email">
                              @if ($errors->has('email'))
                                <div class="error">{{ $errors->first('email') }}</div>
                              @endif
                          </div>
                          <div class="form-group">
                              <label for="pwd">Senha:</label>
                              <input type="password" class="form-control" id="pwd" name="password">
                              @if ($errors->has('password'))
                                <div class="error">{{ $errors->first('password') }}</div>
                              @endif
                          </div>
                          <div class="form-group">
                              <label for="pwd">Confirmar senha:</label>
                              <input type="password" class="form-control" id="pwd" name="password_confirm">
                          </div>
                          <label for="sel1">Sexo:</label>
                          <select class="form-control" id="sel1" name="sex">
                              <option>Mulher</option>
                              <option>Homem</option>
                              <option>Prefiro não informar</option>
                          </select>
                          <label id="tipoCadastro">Tipo de Cadastro:</label>
                          <div class="form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="type" value="0" checked>Aluno
                              </label>
                          </div>
                          <div class="form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="type" value="1">Professor
                              </label>
                          </div>
                          <div class="form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="type" value="2">Assistente
                              </label>
                          </div>
                          
                          <div align="middle">
                              <button id="btnEntrar" type="submit" class="btn btn-lg">Cadastrar</button>
                          </div>
                </form>
        </div>
    </div>


    <div id="top-bot" class="text-center" style="margin-bottom:0">
        <p></p>
    </div>
  @endsection