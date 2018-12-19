<?php
 include "../views/db_connection.php";

 

$razao_social = $_POST["razao_social"];
$nome_fantasia = $_POST["nome_fantasia"];
$telefone_comercial = $_POST["telefone_comercial"];
$celular = $_POST["celular"];
$telefone_contato = $_POST["telefone_contato"];
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
$ramo_atuacao = $_POST["ramo_atuacao"];




$sql = "UPDATE pj SET razao_social = '$razao_social', nome_fantasia = '$nome_fantasia' , telefone_comercial = '$telefone_comercial',
celular = '$celular', cnpj = '$cnpj', inscricao_estadual = '$ins_estadual',  inscricao_municipal = '$ins_municipal', inscricao_suframa = '$ins_suframa',
email = '$email', site = '$site', endereco = '$endereco', num = '$numero', bairro = '$bairro', cep = '$cep', complemento = '$complemento', 
cidade = '$cidade', estado = '$estado', ramo_atuacao = '$ramo_atuacao'   WHERE cnpj = '$cnpj'";

if ($conexao->query($sql) === TRUE) {
    header('Location: clientes.php'); 
    
} else {
    echo "Error updating record: " . $conexao->error;
}

$conexao->close();
?>
