<?php

include("../views/db_connection.php");

$msg = false;

if(isset($_FILES['img_upload'])){

    $extensao = strtolower(substr($_FILES['img_upload']['name'], -4));//pega a extensão do arquivo
    $novo_nome = md5(time()) . $extensao;//define o nome do arquivo
    $diretorio = "upload/";//define o diretorio para onde enviaremos o arquivo

    $descricao = $_POST["descricao_img"];

    move_uploaded_file($_FILES['img_upload']['tmp_name'], $diretorio.$novo_nome);//efetua o upload

    $sql_code = "INSERT INTO imagem (id, nome_imagem, descricao,  data) VALUES(null, '$novo_nome', '$descricao', NOW())";

    if($conexao->query($sql_code)){
        $msg = "Arquivo enviado com sucesso";
        header("Location: cad_imagem.php");
    }else{
        $msg = "Falha ao enviar arquivo";
        
    }
} 


?>
