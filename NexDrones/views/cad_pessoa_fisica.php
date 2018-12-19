<?php
    include "db_connection.php";

$nome = $_POST["nome_completo"];
$telefone_residencial = $_POST["telefone_residencial"];
$celular = $_POST["celular"];
$telefone_contato = $_POST["telefone_contato"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$data_nascimento = $_POST["data_nascimento"];
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
$senha_confirma = $_POST["senha_confirma"];
$ramo_atuacao = $_POST["ramo_atuacao"];


$sql = "INSERT INTO pf (nome_completo, celular, telefone_contato, telefone_residencial, cpf, rg, email, data_nascimento, endereco, num, bairro, cep, complemento, cidade, estado, site, senha_acesso, ramo_atuacao) VALUES 
('$nome', '$celular', '$telefone_contato', '$telefone_residencial', '$cpf', '$rg', '$email', '$data_nascimento', '$endereco', '$numero', '$bairro', '$cep', '$complemento', '$cidade','$estado', '$site', '$senha_acesso','$ramo_atuacao' )";  

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
    
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
?>
