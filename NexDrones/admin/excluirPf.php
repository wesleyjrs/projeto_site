<?php
    include "../views/db_connection.php";

    $id = filter_input(INPUT_GET,"id");

    if($conexao){
        $query = mysqli_query($conexao, "DELETE FROM PF WHERE ID='$id'");
        echo "cliente excluido com sucesso!";
        header("Refresh: 0; clientes.php");
        
    }else{
        die("erro: ". mysqli_error($conexao));
    }

?>