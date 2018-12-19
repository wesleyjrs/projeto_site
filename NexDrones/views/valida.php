<?php
session_start();

    if((isset($_POST['email_login'])) && (isset($_POST['senha_login']))){

    }else{
        $_SESSION['loginErro'] = "Usuario ou senha invalido";
        header("Location: home.php");
    }

?>