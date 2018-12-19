<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro | NexDrones</title>
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilo.css">
    <script type="text/javascript" src="home.js"></script>
    <script type="text/javascript" src="pega_dados_form.js"></script>


</head>

<body>
    <div>
        <!-- Navbar -->
        <div id="navbar_principal">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="home.html"><img id="logo-nexdrones" src="imagens/Logotipo-nexdrones1.png" alt="logotipo nexdrones" ></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto" id="listaMenu">
                        <li class="nav-item active">
                            <a class="nav-link" href="home.html">HOME<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                  SOBRE
                                </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="historia.html">HISTÓRIA</a>
                                <a class="dropdown-item" href="portfolio.html">PORTFÓLIO</a>
                                <a class="dropdown-item" href="clientes.html">CLIENTES</a>
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
                                <a class="dropdown-item" href="imagens_aereas.html">Imagens Aéreas</a>
                                <a class="dropdown-item" href="assistencia_tecnica.html">Assistencia Técnica</a>
                                <a class="dropdown-item" href="cursos.html">Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">CONTATOS</a>
                        </li>
                    </ul>
                    <div id="div_login">
                        <div>
                            <a href="#"><img  src="imagens/icones/user.png" alt="icone usuario" onclick="exibir();" id="icone_login"></a>
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

            <!-- Inicio formulario -->

            <div id="cadastro_usuario">
                <div class="titulo">
                    CADASTRO
                </div>
                <div class="img_titulos">
                    <img src="imagens/icone_drone.png" alt="icone drone">
                </div>

                <div class="form-row" id="div_tipo_pessoa">
                    <button type="button" class="btn btn-primary btn-md" onclick="exibir_pf()" style="width: 150px;">PESSOA FÍSICA</button>
                    <button type="button" class="btn btn-primary btn-md" onclick="exibir_pj()" style="width: 150px;" id="pj">PESSOA JURÍDICA</button>
                </div>

                <!-- ************************inicio form cadastro pessoa fisica ****************** -->

                <div id="form_pessoa_fisica">
                    <div class="titulo" style="margin:30px 0; font-size:25px; text-decoration: underline;">
                        PESSOA FÍSICA
                    </div>
                    <form action="cad_pessoa_fisica.php" method="POST" id="form_cadastro">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="codigo" class="label_estilo">Código</label>
                                <input type="text" class="form-control" id="codigo" disabled>
                            </div>
                            <div class="form-group col-md-9">
                                <label for="nome_completo" class="label_estilo">Nome completo</label>
                                <input type="text" class="form-control" id="nome_completo" name="nome_completo" placeholder="Ex: João da silva">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="telefone_residencial" class="label_estilo">Telefone Residêncial</label>
                                <input type="text" class="form-control" id="telefone_residencial" name="telefone_residencial" placeholder="Ex: (00) 0000-0000">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="celular" class="label_estilo">Celular</label>
                                <input type="text" class="form-control" id="celular" name="celular" placeholder="Ex: (00) 00000-0000">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="telefone_contato" class="label_estilo">Telefone contato</label>
                                <input type="text" class="form-control" id="telefone_contato" name="telefone_contato" placeholder="Ex: (00) 0000-0000">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="cpf" class="label_estilo">CPF</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Ex: 000.000.000-00">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="rg" class="label_estilo">RG</label>
                                <input type="text" class="form-control" id="rg" name="rg" placeholder="Ex: 00.000.000-0">
                            </div>
                            <div class="form-group col-md-4">
                                <div class="form-group">
                                    <label for="data_nascimento" class="label_estilo">Data de nascimento</label>
                                    <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" placeholder="Ex: DD/MM/AAAA">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email" class="label_estilo">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Ex: email@exemplo.com">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="site" class="label_estilo">Site</label>
                                <input type="text" class="form-control" id="site" name="site" placeholder="Ex: www.exemplo.com">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="endereco" class="label_estilo">Endereço</label>
                                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Ex: Av Avenida exemplo">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="numero" class="label_estilo">Número</label>
                                <input type="number" class="form-control" id="numero" name="numero" placeholder="Ex: 000">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="bairro" class="label_estilo">Bairro</label>
                                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Ex: Centro">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="cep" class="label_estilo">CEP</label>
                                <input type="text" class="form-control" id="cep" name="cep" placeholder="Ex: 00000-000">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="complemento" class="label_estilo">Complemento</label>
                                <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Ex: casa/apartamento">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="cidade" class="label_estilo">Cidade</label>
                                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Ex: São Paulo">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="estado" class="label_estilo">Estado</label>
                                <select id="estado" name="estado" class="form-control custom-select">
                                          <option value="AC">Acre</option>
                                          <option value="AL">Alagoas</option>
                                          <option value="AP">Amapá</option>
                                          <option value="AM">Amazonas</option>
                                          <option value="BA">Bahia</option>
                                          <option value="CE">Ceará</option>
                                          <option value="DF">Distrito Federal</option>
                                          <option value="ES">Espírito Santo</option>
                                          <option value="GO">Goiás</option>
                                          <option value="MA">Maranhão</option>
                                          <option value="MT">Mato Grosso</option>
                                          <option value="MS">Mato Grosso do Sul</option>
                                          <option value="MG">Minas Gerais</option>
                                          <option value="PA">Pará</option>
                                          <option value="PB">Paraiba</option>
                                          <option value="PR">Paraná</option>
                                          <option value="PE">Pernambuco</option>
                                          <option value="PI">Piauí</option>
                                          <option value="RJ">Rio de Janeiro</option>
                                          <option value="RN">Rio Grande do Norte</option>
                                          <option value="RS">Rio Grande do Sul</option>
                                          <option value="RO">Rondônia</option>
                                          <option value="RR">Roraima</option>
                                          <option value="SC">Santa Catarina</option>
                                          <option value="SP" selected>São Paulo</option>
                                          <option value="SE">Sergipe</option>
                                          <option value="TO">Tocantis</option>
                                  </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="data_cadastro" class="label_estilo">Data de Cadastro</label>
                                <input type="date" class="form-control" id="data_cadastro" name="data_cadastro" disabled>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label class="label_estilo"> Ramo Atuação</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ramo_atuacao" id="trabalho" value="Trabalho" checked>
                                    <label class="form-check-label" for="trabalho">
                                        Trabalho
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ramo_atuacao" id="hobby" value="Hobby">
                                    <label class="form-check-label" for="hobby">
                                        Hobby
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="senha_acesso" class="label_estilo">Senha de acesso</label>
                                <input type="password" class="form-control" id="senha_acesso" name="senha_acesso" placeholder="Digite sua senha">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="senha_confirma" class="label_estilo">Repita a senha </label>
                                <input type="password" class="form-control" id="senha_confirma" name="senha_confirma" placeholder="Digite sua senha novamente">
                            </div>
                        </div>
                        <div id="btn_cadastro">
                            <button type="submit" class="btn btn-success" id="btn_cadastro">Cadastrar</button>

                        </div>

                    </form>
                </div>

                <!-- ************************inicio form cadastro pessoa juridica***************** -->

                <div id="form_pessoa_juridica">
                    <div class="titulo" style="margin:30px 0; font-size:25px; text-decoration: underline;">
                        PESSOA JURÍDICA
                    </div>
                    <form action="cad_pessoa_juridica.php" method="POST" id="form_cadastro">
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="codigo" class="label_estilo">Código</label>
                                <input type="text" class="form-control" id="codigo" disabled>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="razao_social" class="label_estilo">Razão Social</label>
                                <input type="text" class="form-control" id="razao_social" name="razao_social" placeholder="Ex: João">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="nome_fantasia" class="label_estilo">Nome Fantasia</label>
                                <input type="text" class="form-control" id="nome_fantasia" name="nome_fantasia">
                            </div>

                        </div>
                        <div class="form-row">


                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="telefone_comercial" class="label_estilo">Telefone Comercial</label>
                                <input type="text" class="form-control" id="telefone_comercial" name="telefone_comercial" placeholder="Ex: (00) 0000-0000">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="celular" class="label_estilo">Celular</label>
                                <input type="text" class="form-control" id="celular" name="celular" placeholder="Ex: (00) 00000-0000">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="telefone_contato" class="label_estilo">Telefone contato</label>
                                <input type="text" class="form-control" id="telefone_contato" name="telefone_contato" placeholder="Ex: (00) 0000-0000">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="cnpj" class="label_estilo">CNPJ</label>
                                <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="Ex: 00.000.000/0000-00">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ins_estadual" class="label_estilo">Inscrição Estadual</label>
                                <input type="text" class="form-control" id="ins_estadual" name="ins_estadual" placeholder="Ex: 00000000-00">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="ins_municipal" class="label_estilo">Inscrição Municipal</label>
                                <input type="text" class="form-control" id="ins_municipal" name="ins_municipal">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ins_suframa" class="label_estilo">Inscrição SUFRAMA</label>
                                <input type="text" class="form-control" id="ins_suframa" name="ins_suframa">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email" class="label_estilo">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Ex: email@exemplo.com">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="site" class="label_estilo">Site</label>
                                <input type="text" class="form-control" id="site" name="site" placeholder="Ex: www.exemplo.com">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="endereco" class="label_estilo">Endereço</label>
                                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Ex: Av Avenida exemplo">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="numero" class="label_estilo">Número</label>
                                <input type="number" class="form-control" id="numero" name="numero" placeholder="Ex: 000">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="bairro" class="label_estilo">Bairro</label>
                                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Ex: Centro">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="cep" class="label_estilo">CEP</label>
                                <input type="text" class="form-control" id="cep" name="cep" placeholder="Ex: 00000-000">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="complemento" class="label_estilo">Complemento</label>
                                <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Ex: casa/apartamento/galpão">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="cidade" class="label_estilo">Cidade</label>
                                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Ex: São Paulo">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="estado" class="label_estilo">Estado</label>
                                <select id="estado" name="estado" class="form-control custom-select">
                                          <option value="AC">Acre</option>
                                          <option value="AL">Alagoas</option>
                                          <option value="AP">Amapá</option>
                                          <option value="AM">Amazonas</option>
                                          <option value="BA">Bahia</option>
                                          <option value="CE">Ceará</option>
                                          <option value="DF">Distrito Federal</option>
                                          <option value="ES">Espírito Santo</option>
                                          <option value="GO">Goiás</option>
                                          <option value="MA">Maranhão</option>
                                          <option value="MT">Mato Grosso</option>
                                          <option value="MS">Mato Grosso do Sul</option>
                                          <option value="MG">Minas Gerais</option>
                                          <option value="PA">Pará</option>
                                          <option value="PB">Paraiba</option>
                                          <option value="PR">Paraná</option>
                                          <option value="PE">Pernambuco</option>
                                          <option value="PI">Piauí</option>
                                          <option value="RJ">Rio de Janeiro</option>
                                          <option value="RN">Rio Grande do Norte</option>
                                          <option value="RS">Rio Grande do Sul</option>
                                          <option value="RO">Rondônia</option>
                                          <option value="RR">Roraima</option>
                                          <option value="SC">Santa Catarina</option>
                                          <option value="SP" selected>São Paulo</option>
                                          <option value="SE">Sergipe</option>
                                          <option value="TO">Tocantis</option>
                                  </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="data_cadastro" class="label_estilo">Data de Cadastro</label>
                                <input type="date" class="form-control" id="data_cadastro" name="data_cadastro" disabled>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label class="label_estilo"> Ramo Atuação</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ramo_atuacao" id="trabalho" value="Trabalho" checked>
                                    <label class="form-check-label" for="trabalho">
                                        Trabalho
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ramo_atuacao" id="hobby" value="Hobby">
                                    <label class="form-check-label" for="hobby">
                                        Hobby
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="senha_acesso" class="label_estilo">senha_acesso de acesso</label>
                                <input type="password" class="form-control" id="senha_acesso" name="senha_acesso" placeholder="Digite sua senha">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="senha_confirma" class="label_estilo">Repita a senha </label>
                                <input type="password" class="form-control" id="senha_confirma" placeholder="Digite sua senha novamente">
                            </div>
                        </div>
                        <div id="btn_cadastro">
                            <button type="submit" class="btn btn-success" id="btn_cadastro">Cadastrar</button>

                        </div>

                    </form>
                </div>
            </div>


            <!-- Fim sobre -->
            <div id="corpoSobre">

            </div>

            <?php 
            include_once("rodape.php");
        ?>


            </div>
            <script src="lib/jquery/jquery.min.js"></script>
            <script src="lib/bootstrap/js/bootstrap.min.js"></script>


</body>

</html>