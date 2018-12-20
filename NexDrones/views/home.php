<?php
include("../views/db_connection.php");

    session_start();
    
    //Caso o usuário não esteja autenticado, limpa os dados e redireciona
    if ( !isset($_SESSION['email']) and !isset($_SESSION['senha']) ) {
        //Destrói
        session_destroy();
    
        //Limpa
        unset ($_SESSION['email']);
        unset ($_SESSION['senha']);
        
        //Redireciona para a página de autenticação
        //header('location:login_cad.php');
    }

?>
<html >

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
    <?php include_once("navbar_principal.php");?>
        <!-- <img id="imgTeste" src="imagens/carrousel/4.jpg" alt="drone"> -->
        <!-- carrousel -->
        <div id="imgTeste">
            <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">

                <?php 
                    $controle_ativo = 2;
                    $resultado_carousel = "SELECT * FROM imagem ORDER BY id ASC";
                    $result = mysqli_query($conexao, $resultado_carousel);

                    while($row_carousel = mysqli_fetch_assoc($result)) {
                        if($controle_ativo == 2){?>
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="admin/upload/<?php echo $row_carousel['nome_imagem'] ?>" alt="Second slide">
                    </div><?php
                        $controle_ativo = 1;
                    }else{?>
                        <div class="carousel-item ">
                        <img class="d-block w-100" src="imagens/carrousel/<?php echo $row_carousel['nome_imagem'] ?>" alt="Third slide">
                    </div><?php

                    }
                    }
                ?>




                    
                    
                    <div class="carousel-item">
                        <img class="d-block w-100" src="imagens/carrousel/teste3.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="imagens/carrousel/teste1.jpg" alt="Forth slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
        </div>


        <!-- Fim - carrousel -->

        <p height="23"><div class="alert alert-success" role="alert"><?php echo $_SESSION['mensagem1'] ;?></div></p>
        <!-- Inicio serviços -->
        <div class="pre_titulo">
            CONFIRA NOSSOS
        </div>
        <div class="titulo">
            SERVIÇOS
        </div>
        <div class="img_titulos">
            <img src="imagens/icone_drone.png" alt="icone drone">
        </div>

        <div id="banner_servico">
            <!-- item 01 -->
            <div class="row item_banner">
                <div class="col-md-5">
                    <img src="imagens/servicos/servico01.jpg" alt="" class="img_banner_servicos zoom">
                </div>
                <div class="col-md-7">
                    <div>
                        <h3 class="titulo_banner_servico">Imagens Aéreas</h3>
                        <p class="text_banner_servicos">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec ex arcu. Nulla facilisi. Lorem
                            ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec ex arcu. Nulla facilisi. Lorem ipsum
                            dolor sit amet, consectetur adipiscing elit. Nulla nec ex arcu. Nulla facilisi. Mauris sed eleifend
                            purus, in luctus nibh. Donec lectus magna, lacinia sed lacinia id, pretium quis est. Vestibulum
                            molestie congue mollis.<br>
                            <a href="imagens_aereas.html"><button type="button" class="btn btn-primary espaco">Saiba mais</button></a>
                    </div>
                </div>
            </div>
            <br><br><br>
            <!-- fim item 01 -->
            <!-- inicio item 02 -->
            <div class="row item_banner" style="background: linear-gradient(140deg, rgba(220, 220, 220, 0.8) 45%, #fff 45% );">
                <div class="col-md-7">
                    <div>
                        <h3 class="titulo_banner_servico">Assistencia Técnica</h3>
                        <p class="text_banner_servicos">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec ex arcu. Nulla facilisi. Lorem
                            ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec ex arcu. Nulla facilisi. Lorem ipsum
                            dolor sit amet, consectetur adipiscing elit. Nulla nec ex arcu. Nulla facilisi. Mauris sed eleifend
                            purus, in luctus nibh. Donec lectus magna, lacinia sed lacinia id, pretium quis est. Vestibulum
                            molestie congue mollis. <br>
                            <a href="assistencia_tecnica.html"><button type="button" class="btn btn-primary espaco">Saiba mais</button></a>
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="imagens/servicos/servico02-teste.jpg" alt="" class="img_banner_servicosD zoom">
                </div>
            </div>
            <br><br><br>
            <!-- fim item 02 -->
            <!-- inicio item 03 -->
            <div class="row item_banner">
                <div class="col-md-5">
                    <img src="imagens/servicos/servico03.jpg" alt="" class="img_banner_servicos zoom">
                </div>
                <div class="col-md-7">
                    <div>
                        <h3 class="titulo_banner_servico">Cursos</h3>
                        <p class="text_banner_servicos">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec ex arcu. Nulla facilisi. Lorem
                            ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec ex arcu. Nulla facilisi. Lorem ipsum
                            dolor sit amet, consectetur adipiscing elit. Nulla nec ex arcu. Nulla facilisi. Mauris sed eleifend
                            purus, in luctus nibh. Donec lectus magna, lacinia sed lacinia id, pretium quis est. Vestibulum
                            molestie congue mollis. <br>
                            <a href="cursos.html"><button type="button" class="btn btn-primary espaco">Saiba mais</button></a>
                    </div>
                </div>
            </div>
            <!-- fim item 03 -->

        </div>
        <!-- Fim serviços -->

        <!-- Inicio Portifólio -->
        <div class="pre_titulo">
            CONFIRA NOSSO
        </div>
        <div class="titulo">
            PORTFÓLIO
        </div>
        <div class="img_titulos">
            <img src="imagens/icone_drone.png" alt="icone drone">
        </div>
        <div class="row" id="cards">
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top img_card" src="imagens/drones/01.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top img_card" src="imagens/drones/02.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top img_card" src="imagens/drones/03.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top img_card" src="imagens/drones/04.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fim Portifólio -->

        </div>
        <!-- inicio icones -->
        <div class="pre_titulo">
            CONFIRA ALGUMAS DE NOSSAS
        </div>
        <div class="titulo">
            REDES SOCIAIS
        </div>
        <div class="img_titulos">
            <img src="imagens/icone_drone.png" alt="icone drone">
        </div>
        <div class="row" id="corpo">
            <div class="iconSociais col-md-3 zoom" id="icon_youtube"><a href="https://www.youtube.com/channel/UCTKU5JVE8J_XA37SwF_cTHQ/featured" target="_blank">
                <img src="imagens/icones/youtube-128.png" alt="youtube">
                <span class="descricao_icones">YouTube</span></a></div>
            <div class="iconSociais col-md-3 zoom"><a href="https://www.facebook.com/nexdrones/" target="_blank">
                <img src="imagens/icones/facebook-128.png" alt="facebook">
                <span class="descricao_icones">Facebook</span></a></div>
            <div class="iconSociais col-md-3 zoom"><a href="#">
                <img src="imagens/icones/blogger-128.png" alt="blogger">
                <span class="descricao_icones">Blogger</span></a></div>
            <div class="iconSociais col-md-3 zoom"><a href="#" target="_blank">
                    <img src="imagens/icones/instagram-128-antigo.png" alt="facebook">
                    <span class="descricao_icones">Instagram</span></a></div>

        </div>
        <!-- fim icones -->

        <!-- Inicio clientes -->
        <!-- <div >
            <div id="blocoClientes">
                    <div class="pre_titulo">
                            CONHEÇA NOSSOS
                    </div>
                    <div class="titulo" style="color:#fff">
                        CLIENTES
                    </div>
                    <div class="img_titulos">
                        <img src="imagens/icone_drone_write.png" alt="icone drone">
                    </div>
                        
            </div>
            <img src="imagens/fundo_clientes.jpg" alt="fundo banner clientes" id="bannerClientes">
        </div> -->
        <!-- fim clientes -->

        <?php 
            include_once("rodape.php");
        ?>
        
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>
        

</body>

</html>