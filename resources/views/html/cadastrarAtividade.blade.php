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
            <div class="col-sm-12" align="middle">
                <h2>Criação de Atividade</h2>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-12">
                    <form id="form">
                        <div class="form-group">
                          <label for="email">Nome:</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="pwd">Descrição:</label>
                          <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Tipo de Troféu:</label>
                            <!--Deverão ser adicionados aqui as opções disponíveis no BD para os tipos de Troféu-->
                            <select class="form-control" id="sel1">
                                <option>Opção 1</option>
                                <option>Opção 2</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Prazo de Entrega:</label>
                            <input class="form-control" type="datetime-local" value="0000-00-00T00:00:00"/>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Tipo de Atividade:</label>
                            <select class="form-control" id="sel1">
                                <option>Individual</option>
                                <option>Em Grupo</option>
                            </select>
                        </div>
                        <div align="middle">
                            <button id="btn" type="submit" class="btn">Criar Atividade</button>
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
