<?php session_start(); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | NexDrones</title>
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilo.css">
    <script type="text/javascript" src="home.js"></script>



</head>

<body>
    <?php include_once("navbar_principal.php"); ?>
            <div class="form-row" id="login_cad">
                
                    <div class="col-md-5">
                            <div  class="centralizar">
                                    <form action="#" method="POST">
                                            <h4 id="tituloForm">Cadastrar</h4>
                                            <div class="form-group">
                                                <label for="email_cad" class="label_estilo">Email</label>
                                                <input type="email" class="form-control" id="email_cad" aria-describedby="emailHelp" placeholder="Digite seu email">
                                            </div>
                                            <div >
                                                <a href="cadastro_usuario.html"><button type="button" class="btn btn-primary btn-sm">Continuar</button></a>
                                            </div>
                                        </form>
                            </div>
    
                    </div>
                    <div class="col-md-2">
                        
                    </div>
                <div class="col-md-5">
                        <div class="centralizar">
                                <form action="valida_login.php" method="POST">
                                    <h4 id="tituloForm">Efetuar Login</h4>
                                    <div class="form-group">
                                        <label for="email_login" class="label_estilo">Email</label>
                                        <input type="email" class="form-control" id="email_login" name="email_login" aria-describedby="emailHelp" placeholder="Digite seu email">
                                    </div>
                                    <div class="form-group">
                                        <label for="senha_login" class="label_estilo">Senha</label>
                                        <input type="password" class="form-control" id="senha_login" name="senha_login" placeholder="Digite sua senha">
                                    </div>
                                    <button type="button" class="btn btn-link" id="esqueceu_senha">Esqueceu sua senha?</button>
                                    <div >
                                        <div class="btnsLogin">

                                        </div>
                                        <button type="submit" class="btn btn-primary btn-sm" id="logar">Logar</button>
                                    </div>
                                </form>
                                <p>
                                <p height="23"><div class="alert alert-danger" role="alert"><?php
                                 echo $_SESSION['mensagem'] ;?></div></p>

                                </p>
                        </div>
                </div>

            </div>
        

        <?php 
        include_once("rodape.php");
    ?>

        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>


</body>

</html>