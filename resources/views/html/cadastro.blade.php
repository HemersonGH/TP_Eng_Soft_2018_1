<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nome do Sistema</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="estilo.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>

    <div id="top-bot" class="text-center" style="margin-bottom:0">
        <img src="logo.svg"></img>
    </div>

    <nav id="menu" height="100px" class="navbar navbar-expand-sm navbar-dark">
        <a class="navbar-brand" href="#">Disciplinas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Troféus</a>
                </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Equipes</a>
                    </li>    
                </ul>
            </div>     
        </div>
        <button type="button" class="btn" id="btnUsuario">Usuário</button>   
    </nav>

    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-12" id="antesForm">
<!-- FORM -->
                    <form id="form">
                      {{ csrf_field()  }}
                        <div class="form-group">
                          <label for="email">Nome:</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="pwd">CPF:</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Data de Nascimento:</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Instituição:</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pwd">E-mail:</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Senha:</label>
                            <input type="password" class="form-control" id="pwd">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Confirmar senha:</label>
                            <input type="password" class="form-control" id="pwd">
                        </div>
                        <label for="sel1">Sexo:</label>
                        <select class="form-control" id="sel1">
                            <option>Mulher</option>
                            <option>Homem</option>
                            <option>Prefiro não informar</option>
                        </select>
                        <label id="tipoCadastro">Tipo de Cadastro:</label>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Aluno
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Professor
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Assistente
                            </label>
                        </div>
                        
                        <div align="middle">
                            <button id="btn" type="submit" class="btn">Cadastrar</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>

    <div id="top-bot" class="text-center" style="margin-bottom:0">
        <p></p>
    </div>

</body>
</html>
