<?php
session_start();

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conta | NexDrones</title>
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilo.css">
    <script type="text/javascript" src="home.js"></script>



</head>

<body>
    <div id="sombreamento" onclick="ocultar(); ocultar_esqueci_senha();">
    </div>
    <!-- Navbar -->
<div class="navbar_principal">
<nav class="navbar navbar-expand-lg navbar-light">
    <a href="home.php"><img id="logo-nexdrones" src="imagens/Logotipo-nexdrones1.png" alt="logotipo nexdrones" ></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" id="listaMenu">
            <li class="nav-item active">
                <a class="nav-link" href="home.php">HOME<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                          SETORES
                        </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">AGRICULTURA</a>
                    <a class="dropdown-item" href="#">ITEM 02</a>
                    <a class="dropdown-item" href="#">ITEM 03</a>
                    <!-- <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div> -->
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                          SOBRE
                        </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="historia.php">HISTÓRIA</a>
                    <a class="dropdown-item" href="portfolio.php">PORTFÓLIO</a>
                    <a class="dropdown-item" href="clientes.php">CLIENTES</a>
                    <!-- <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div> -->
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">LOJA</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                          SERVIÇOS
                        </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="imagens_aereas.php">Imagens Aéreas</a>
                    <a class="dropdown-item" href="assistencia_tecnica.php">Assistência Técnica</a>
                    <a class="dropdown-item" href="cursos.php">Cursos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">CONTATOS</a>
            </li>
        </ul>
        <div id="div_login">
            <div>
                <a href="conta_pessoal.php"><img  src="imagens/icones/user.png" alt="icone usuario" id="icone_login"></a>
            </div>
            <div class="link_login_cadastrar">
                <a href="#" onclick="exibir();"><span id="seja_bem_vindo">Seja Bem Vindo!</span></a><br>
                <a href="#" onclick="exibir();"><span id="entre_cadastro">Entre ou cadastre-se.</span></a>
            </div>
        </div>
        </div>
</nav>
</div>
<!-- Fim - Navbar -->
       <?php include_once("box_login.php") ?>
        <!-- inicio_esqueci a senha -->

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Recuperar Senha</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <form action="#">
                            <div class="form-group">
                                <label for="email_recuperar_senha" class="label_login">Informe seu email para recuperação de senha.</label>
                                <input type="email" class="form-control" id="email_recuperar_senha" aria-describedby="emailHelp" placeholder="Digite seu email">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- fim_esqueci a senha -->
        
        <!-- fim icones -->

        <!-- Inicio minha conta -->
        <div>

        </div>
        <div>
            <div class="row" style="height: 600; margin: 0 50px; margin-top:120px;">
                <div class="col-md-6">
                    <div class="conta">
                        <div class="cabecalho">

                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="conta">
                        <div class="cabecalho">
                            
                        </div>
                        <div style="position: absolute;top: 100px;left: 60px;">
                            
                        <a href="../admin/editarPf.php">Alterar dados</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fim minha conta -->

        <?php 
            include_once("rodape.php");
        ?>


        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>


</body>

</html>