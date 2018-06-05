<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nome do Sistema</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
      height: 200px;
      border: solid 1px #c19a25;
  }
  #menu{
      background-color: #c19a25;
  }
  #top-bot{
      background-color: #fff0c9;
  }
  img{
      height: 140px;
  }
  #btnUsuario{
      background-color: #fff0c9;
      color: black;
  }
  #btnEntrar{
      background-color: #c19a25;
      color: white;
  }
  #formEntrar{
      width: 400px;
      margin-left: auto;
      margin-right: auto; 
      font-size: 17px;     
  }
  </style>
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
                    <form id="formEntrar">
                        <div class="form-group">
                          <label for="email">E-mail:</label>
                          <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                          <label for="pwd">Senha:</label>
                          <input type="password" class="form-control" id="pwd">
                        </div>
                        <div align="middle">
                            <button id="btnEntrar" type="submit" class="btn">Entrar</button>
                            <div>
                                <p>Ainda não tem uma conta? <a href="cadastrar.html">Cadastre-se</a></p>
                            </div>
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