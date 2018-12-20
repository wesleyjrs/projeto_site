<?php 
 
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Index admin | NexDrones</title>
        <link rel="stylesheet" href="../views/lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="admin.css">
        <script type="text/javascript" src="admin.js"></script>
        
    </head>
    <body>
        <!-- Image and text -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a  href="home.html"><img id="logo-nexdrones" src="../views/imagens/logo-white.png" alt="logotipo nexdrones" ></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup" >
                  <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#">HOME <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">USÚARIOS</a>
                    <a class="nav-item nav-link" href="#">LOJA</a>
                    <a class="nav-item nav-link" href="#">ITEM01</a>
                    <!-- <a class="nav-item nav-link disabled" href="#">Disabled</a> -->
                  </div>
                </div>
        </nav>

        <!-- nav vertical -->
        <div id="nav_vertical">
          <ul>
            <li id="li_principal">
                <div class="toggle_btn" >
                    <img src="../views//imagens/menu2.png" alt="logo menu" onclick="toggleSidebar()">
                  </div>
              <div id="logo_user">
                <img src="../views/imagens/icones/user-admin.png" alt="logo usuario admin">
              </div>
              <div id="usuario_atual">
                Usúario atual
              </div>
              
            </li>
            <a href="#"><li>HOME</li></a>
            <a href="#"><li>LOJA</li></a>
            <a href="clientes.php"><li>CLIENTES</li></a>
            <a href="#"><li>ITEM01</li></a>
            <a href="#"><li>ITEM02</li></a>        
            <a href="cad_imagem.php"><li>Cad. imagens</li></a>        
          </ul>
        </div>
        <div style="width:500px;margin-left:300px;margin-top:100px;background:rgba(129, 117, 117, 0.71);padding:30px;">
        <?php
          // include("upload.php");
          
          // if($mgn != false){
          //   echo "<p> $mgn </p>";
          // }
          ?>
        <form action="upload.php" method="post" enctype = "multipart/form-data">
                <div class="form-group">
                    <label for="img_upload">Selecione</label>
                    <input type="file" class="form-control-file" id="img_upload" name="img_upload">
                </div>
                <div class="form-group">
                    <label for="descricao_img">Descrição</label>
                    <input type="text" class="form-control" id="descricao_img" name="descricao_img" placeholder="Descrição..." >  
                </div>
                <button type="submit" class="btn btn-primary" name="enviar">enviar</button>
            </form>
        </div>

      



              <script src="../views/lib/jquery/jquery.min.js"></script>
              <script src="../views/lib/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>