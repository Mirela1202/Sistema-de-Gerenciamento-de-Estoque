<?php
include ('conexao.php');

if (isset($_POST['usuario']) || isset($_POST['senha'])){
    
    if (strlen($_POST['usuario']) == 0) {
        echo "Preencha seu usuario!";
    } else if (strlen($_POST['senha'] == 0)){
        echo "Preencha sua senha!";
    }    
    else{
        $usuario= $conexao->real_escape_string($_POST['usuario']);
        $senha = $conexao->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuario where usu_login = '$usuario' AND usu_senha = '$senha';";   // Vai ter que alterar o usu_login e usu_senha para o nome das variaveis no seu banco
        $resultado = $conexao->query($sql_code) or die("Falha na execução do codigo SQL: ".$conexao->error);

        if ($resultado->num_rows == 1) {
            echo "Login realizado com Sucesso!";
         
            $usuario = $resultado->fetch_assoc();

            if (!isset($_SESSION)){
                session_start();
            }
            
            $_SESSION["id"] = $usuario["usu_id"];                                                   // Vai ter que alterar o usu_id aqui tbm
            $_SESSION["nome"] = $usuario["usu_nome"];
            $_SESSION["estoque"] = 1;                                               // Vai ter que alterar o usu_nome aqui tbm

            header("Location:../html/TELA INICIAL.php");
        }
        else {
            echo "login ou Senha incorretos!";
            echo $resultado->fetch_assoc();
        }
    }


}