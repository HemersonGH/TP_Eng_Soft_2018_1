@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-sm-12" id="antesForm">

                    <form id="formEntrar" class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="lead control-label">E-Mail</label>

                          
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="lead control-label">Senha</label>

                            
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group">
                            <div class="">
                                <div class="checkbox justify-content-right">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Me lembre
                                    </label>
                                    <a class="- btn btn-link" href="{{ route('password.request') }}">
                                            Esqueceu sua senha?
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="text-center">
                                <button type="submit" id="btnEntrar" class="mb-3 btn btn-lg">
                                    Entrar
                                </button>
                                <div>
                                        <p class="lead text-muted">Ainda não tem uma conta? <a href="{{ route('cadastro.view') }}">Cadastre-se</a></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 
@endsection
