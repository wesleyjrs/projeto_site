<?php
  include "../views/db_connection.php";

  $consultaPf = "SELECT * FROM PF";
  $consultaPj = "SELECT * FROM PJ";


  $conPf = $conexao->query($consultaPf) or die($conexao->error);
  $conPj = $conexao->query($consultaPj) or die($conexao->error);

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
    <div style="position:fixed; top:0; width:100%;">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="home.html"><img id="logo-nexdrones" src="../views/imagens/logo-white.png" alt="logotipo nexdrones" ></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
          aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">HOME <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">USÚARIOS</a>
            <a class="nav-item nav-link" href="#">LOJA</a>
            <a class="nav-item nav-link" href="#">ITEM01</a>
            <!-- <a class="nav-item nav-link disabled" href="#">Disabled</a> -->
          </div>
        </div>
      </nav>
    </div>

    <!-- nav vertical -->
    <div id="nav_vertical">
      <ul>
        <li id="li_principal">
          <div class="toggle_btn">
            <img src="../views/imagens/menu2.png" alt="logo menu" onclick="toggleSidebar()">
          </div>
          <div id="logo_user">
            <img src="../views/imagens/icones/user-admin.png" alt="logo usuario admin">
          </div>
          <div id="usuario_atual">
            Usúario atual
          </div>

        </li>
        <a href="index_admin.php">
          <li>HOME</li>
        </a>
        <a href="#">
          <li>LOJA</li>
        </a>
        <a href="#">
          <li>CLIENTES</li>
        </a>
        <a href="#">
          <li>ITEM01</li>
        </a>
        <a href="#">
          <li>ITEM02</li>
        </a>
      </ul>
    </div>
    <!-- ********listagem clientes fisicos************* -->
    <div style="margin-left:236px; margin-top:70px;">
      <h2>Clientes Físicos</h2>
      <div style="overflow:auto; width:1094px">
        <table class="table table-striped table-bordered">
          <thead class="thead-dark">
            <tr>
              <th scope="col">código</th>
              <th scope="col">Nome</th>
              <th scope="col">Tel Residencial</th>
              <th scope="col">Celular</th>
              <th scope="col">Tel Contato</th>
              <th scope="col">CPF</th>
              <th scope="col">RG</th>
              <th scope="col">Data de Nasc</th>
              <th scope="col">Email</th>
              <th scope="col">Site</th>
              <th scope="col">Endereco</th>
              <th scope="col">Número</th>
              <th scope="col">Bairro</th>
              <th scope="col">CEP</th>
              <th scope="col">Complemento</th>
              <th scope="col">Cidade</th>
              <th scope="col">Estado</th>
              <th scope="col">Data Cadastro</th>
              <th scope="col">Ramo Atuação</th>
              <th scope="col"></th>
              <th scope="col"></th>


            </tr>
          </thead>
          <tbody>
            <?php while($dado = $conPf->fetch_array() ){ ?>
            <tr>
              <th scope="col">
                <?php echo $dado["id"]; ?>
              </th>
              <th scope="col">
                <?php echo $dado["nome_completo"]; ?>
              </th>
              <th scope="col">
                <?php echo $dado["telefone_residencial"]; ?>
              </th>
              <th scope="col">
                <?php echo $dado["celular"]; ?>
              </th>
              <th scope="col">
                <?php echo $dado["telefone_contato"]; ?>
              </th>
              <th scope="col">
                <?php echo $dado["cpf"]; ?>
              </th>
              <th scope="col">
                <?php echo $dado["rg"]; ?>
              </th>
              <th scope="col">
                <?php echo date('d/m/Y', strtotime($dado["data_nascimento"])); ?>
              </th>
              <th scope="col">
                <?php echo $dado["email"]; ?>
              </th>
              <th scope="col">
                <?php echo $dado["site"]; ?>
              </th>
              <th scope="col">
                <?php echo $dado["endereco"]; ?>
              </th>
              <th scope="col">
                <?php echo $dado["num"]; ?>
              </th>
              <th scope="col">
                <?php echo $dado["bairro"]; ?>
              </th>
              <th scope="col">
                <?php echo $dado["cep"]; ?>
              </th>
              <th scope="col">
                <?php echo $dado["complemento"]; ?>
              </th>
              <th scope="col">
                <?php echo $dado["cidade"]; ?>
              </th>
              <th scope="col">
                <?php echo $dado["estado"]; ?>
              </th>
              <th scope="col">
                <?php echo date('d/m/Y', strtotime($dado["data_cadastro"]));?>
              </th>
              <th scope="col">
                <?php echo $dado["ramo_atuacao"]; ?>
              </th>
              <th scope="col"><a href="<?php echo " editarPf.php?cpf=" . $dado['cpf'] ?>"><button type="button" class="btn btn-primary">Editar</button></a></th>
            
              <th scope="col"><a href="<?php echo " excluirPf.php?id=" . $dado['id'] ?>"><button type="button" class="btn btn-danger">Excluir</button></a></th>


            </tr>
            <?php } ?>

          </tbody>
        </table>
      </div>
    </div>

    <!-- ************listagem clientes juridicos***************** -->
    <div  style="margin-left:236px; margin-top:50px; margin-bottom: 100px;">
      <h2>Clientes Juridicos</h2>
      <div style="overflow:auto; width:1094px">
        <table class="table table-striped table-bordered">
          <thead class="thead-dark">
            <tr>
              <th scope="col">código</th>
              <th scope="col">Razão Social</th>
              <th scope="col">Nome Fantasia</th>
              <th scope="col">Celular</th>
              <th scope="col">Tel Contato</th>
              <th scope="col">Tel Comercial</th>
              <th scope="col">CNPJ</th>
              <th scope="col">Insc Estadual</th>
              <th scope="col">Insc Municipal</th>
              <th scope="col">Insc Suframa</th>
              <th scope="col">Email</th>
              <th scope="col">Site</th>
              <th scope="col">Endereco</th>
              <th scope="col">Número</th>
              <th scope="col">Bairro</th>
              <th scope="col">CEP</th>
              <th scope="col">Complemento</th>
              <th scope="col">Cidade</th>
              <th scope="col">Estado</th>
              <th scope="col">Data Cadastro</th>
              <th scope="col">Ramo Atuação</th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php while($dado = $conPj->fetch_array() ){ ?>
            <tr>
              <th scope="col">
                <?php echo $dado["id"]; ?>
              </th>
              <th scope="col">
                <?php echo $dado["razao_social"]; ?>
              </th>
              <th scope="col">
                <?php echo $dado["nome_fantasia"]; ?>
              </th>
              <th scope="col">
                <?php echo $dado["celular"]; ?>
              </th>
              <th scope="col">
                <?php echo $dado["telefone_contato"]; ?>
              </th>
              <th scope="col">
                <?php echo $dado["telefone_comercial"]; ?>
              </th>
              <th scope="col">
                <?php echo $dado["cnpj"]; ?>
              </th>
              <th scope="col">
                <?php echo $dado["inscricao_estadual"]; ?>
              </th>
              <th scope="col">
                <?php echo $dado["inscricao_municipal"]; ?>
              </th>
              <th scope="col">
                <?php echo $dado["inscricao_suframa"]; ?>
              </th>
              <th scope="col">
                <?php echo $dado["email"]; ?>
              </th>
              <th scope="col">
                <?php echo $dado["site"]; ?>
              </th>
              <th scope="col">
                <?php echo $dado["endereco"]; ?>
              </th>
              <th scope="col">
                <?php echo $dado["num"]; ?>
              </th>
              <th scope="col">
                <?php echo $dado["bairro"]; ?>
              </th>
              <th scope="col">
                <?php echo $dado["cep"]; ?>
              </th>
              <th scope="col">
                <?php echo $dado["complemento"]; ?>
              </th>
              <th scope="col">
                <?php echo $dado["cidade"]; ?>
              </th>
              <th scope="col">
                <?php echo $dado["estado"]; ?>
              </th>
              <th scope="col">
                <?php echo date('d/m/Y', strtotime($dado["data_cadastro"]));?>
              </th>
              <th scope="col">
                <?php echo $dado["ramo_atuacao"]; ?>
              </th>
              <th scope="col"><a href="<?php echo " editarPj.php?cnpj=" . $dado['cnpj'] ?>"><button type="button" class="btn btn-primary">Editar</button></a></th>
              
              <th scope="col"><a href="<?php echo " excluirPj.php?id=" . $dado['id'] ?>"><button type="button" class="btn btn-danger">Excluir</button></a></th>

            </tr>
            <?php } ?>

          </tbody>
        </table>
      </div>
    </div>




    <script src="../views/lib/jquery/jquery.min.js"></script>
    <script src="../views/lib/bootstrap/js/bootstrap.min.js"></script>
  </body>

  </html>