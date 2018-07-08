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
                <!--Deverá ser adicionado o nome da atividade disponível no BD-->
                <h2>Atividade - "Nome da Atividade"</h2>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top:30px" id="format">
        <div class="row">
            <div class="col-sm-12">
                 <!--Deverão ser adicionados aqui as informações da atividade disponível no BD-->
                <p><div id="titulo">Descrição: </div>Descrição da Atividade Descrição da Atividade Descrição da Atividade Descrição da Atividade 
                Descrição da Atividade</p>    
                <p><div id="titulo">Prazo da entrega:</div> --/--/-- 00:00</p>
                <p><div id="titulo">Troféu: </div> tipo do troféu</p>
                <p><div id="titulo">Tipo da atividade: </div>tipo da atividade</p>
                <p><div id="titulo">Comentários do Professor: </div>Sem comentários no momento.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <form>
                        <input type="file" class="form-control-file" aria-describedby="fileHelp">
                        <div align="middle" id="antesBtn">
                                <button id="btn" type="submit" class="btn">Enviar Atividade</button>
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
