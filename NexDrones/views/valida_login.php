<?php
require 'db_connection.php';

    $email = $_POST["email_login"];
    $senha = $_POST['senha_login'];

    echo "variavel email: $email <br>";
    echo "variavel senha: $senha <br>";


   $sql = mysqli_query($conexao, "SELECT * FROM pf WHERE email = '$email' AND senha_acesso = '$senha'") or die ("Erro na seleção da tabela.");


    //Caso consiga logar cria a sessão
    if (mysqli_num_rows ($sql) > 0) {
    // session_start inicia a sessão
    session_start();
	
	$_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        $_SESSION['mensagem1'] = 'Login efetuado com sucesso';
       
        header('location:home.php');
        
        echo "login realizado";
    

}else {
	//session_destroy();
    
        //Limpa
        unset ($_SESSION['email']);
        unset ($_SESSION['senha']);
    //    $_SESSION['mensagem'] = 'usuario ou senha invalido!';
    
        //Redireciona para a página de autenticação
        header('location:login_cad.php');
    
	
}
$_SESSION['mensagem'] = 'usuario ou senha invalido!';






?>