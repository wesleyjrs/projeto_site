<?php
 include "../views/db_connection.php";

 
$nome = $_POST["nome_completo"];
$celular = $_POST["celular"];
$telefone_contato = $_POST["telefone_contato"];
$telefone_residencial = $_POST["telefone_residencial"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$email = $_POST["email"];
$data_nascimento = $_POST["data_nascimento"];
$endereco = $_POST["endereco"];
$numero = $_POST["numero"];
$bairro = $_POST["bairro"];
$cep = $_POST["cep"];
$complemento = $_POST["complemento"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$site = $_POST["site"];
$ramo_atuacao = $_POST["ramo_atuacao"];



$sql = "UPDATE pf SET nome_completo ='$nome', celular = '$celular', telefone_contato = '$telefone_contato', telefone_residencial = '$telefone_residencial',
 cpf = '$cpf', rg = '$rg', email = '$email', data_nascimento = '$data_nascimento', endereco = '$endereco', num = '$numero', bairro = '$bairro', cep = '$cep',
  complemento = '$complemento', cidade = '$cidade', estado = '$estado', site = '$site', ramo_atuacao = '$ramo_atuacao' WHERE cpf = '$cpf'";

if ($conexao->query($sql) === TRUE) {
    
    header('Location: clientes.php'); 
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conexao->error;
}

$conexao->close();
?>
