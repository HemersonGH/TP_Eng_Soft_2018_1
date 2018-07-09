<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Trophies')</title>

		<!-- Includes -->
		@include('partials.bootstrap')

        <!-- Fonts -->
        

        <!-- Styles -->
		@section('link')
			<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
		@show

    </head>
    <body>
		<div id="top-bot" class="text-center" style="margin-bottom:0">
		    <img src="{{ asset('img/logo.svg') }}"></img>
		</div>

		<nav id="menu" height="100px" class="navbar navbar-expand-sm navbar-dark mb-4">
            @auth
		    <a class="navbar-brand" href="{{ route('home') }}">Disciplinas</a>
            @endauth
		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		        <span class="navbar-toggler-icon"></span>
		    </button>

            
		    <div class="collapse navbar-collapse" id="collapsibleNavbar">
		        <ul class="navbar-nav">
		            <li class="nav-item">
                        @auth
		                <a class="nav-link" href="{{ route('trofeus') }}">Troféus</a>
                        @endauth
		            </li>
	                <li class="nav-item">
                        @auth
	                    <a class="nav-link" href="#">Equipes</a>
                        @endauth
	                </li>
	            </ul>  

                
		    </div>     
            
	<ul class="nav navbar-nav navbar-right">
					@guest
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Entrar</a></li>
                        <li class="nav-item ml-3"><a class="nav-link" href="{{ route('cadastro.view') }}">Cadastrar</a></li>
                    @else
	                <li class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li> 
                    @endguest 
	            </ul>
		</nav>
   
    	<div class="container">
			@yield('content')
	    </div>
    </body>
</html>
