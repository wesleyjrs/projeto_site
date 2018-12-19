<?php
include "db_connection.php";

$razao_social = $_POST["razao_social"];
$nome_fantasia = $_POST["nome_fantasia"];
$celular = $_POST["celular"];
$telefone_contato = $_POST["telefone_contato"];
$telefone_comercial = $_POST["telefone_comercial"];
$cnpj = $_POST["cnpj"];
$ins_estadual = $_POST["ins_estadual"];
$ins_municipal = $_POST["ins_municipal"];
$ins_suframa = $_POST["ins_suframa"];
$email = $_POST["email"];
$site = $_POST["site"];
$endereco = $_POST["endereco"];
$numero = $_POST["numero"];
$bairro = $_POST["bairro"];
$cep = $_POST["cep"];
$complemento = $_POST["complemento"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
//$data_cadastro = $_POST["data_cadastro"];
$senha_acesso = $_POST["senha_acesso"];
$ramo_atuacao = $_POST["ramo_atuacao"];


$sql = "INSERT INTO pj (razao_social, nome_fantasia, celular, telefone_contato, telefone_comercial, cnpj, 
                        inscricao_estadual, inscricao_municipal, inscricao_suframa, email, site, endereco, num, bairro, cep, 
                        complemento, cidade, estado, senha_acesso,ramo_atuacao) 
                        VALUES ('$razao_social', '$nome_fantasia', '$celular', '$telefone_contato', '$telefone_comercial',
                         '$cnpj', '$ins_estadual', '$ins_municipal', '$ins_suframa', '$email', '$site', '$endereco', '$numero', '$bairro',
                          '$cep', '$complemento', '$cidade','$estado', '$senha_acesso','$ramo_atuacao' )";  

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
?>