<?php
    include "../views/db_connection.php";

    $id = filter_input(INPUT_GET,"id");

    if($conexao){
        $query = mysqli_query($conexao, "DELETE FROM PJ WHERE ID='$id'");
        echo "cliente excluido com sucesso!";
    }else{
        die("erro: ". mysqli_error($conexao));
    }

?>