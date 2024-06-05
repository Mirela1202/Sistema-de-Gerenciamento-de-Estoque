<?php
include("conexao.php");

if (isset($_POST['nome']) || isset($_POST['senha']) || isset($_POST['usuario'])) {

    if (strlen($_POST['nome']) == 0){
        echo "Preencha seu nome!";
    }
    else if (strlen($_POST['senha']) == 0){
        echo "Preencha sua senha!";
    }
    else if (strlen($_POST['usuario']) == 0){
        echo "Preencha seu usuário!";
    }
      
    else {

        $nome = $conexao->real_escape_string($_POST['nome']);
        $sql_verifica = "SELECT verificaUsuario('$nome');";
        $result_verifica = $conexao->query($sql_verifica);
        $valida= $result_verifica->fetch_array();
        if ( $valida[0] == 1){
            echo "Usuário ja utilizado. Escolha outro usuário!";
        }
        else{
        $usuario = $conexao->real_escape_string($_POST['usuario']);
        $senha = $conexao->real_escape_string($_POST['senha']);
        $email = $conexao->real_escape_string($_POST['email']);

        $sql_code = "CALL insereUsuario('$usuario','$senha','$nome','$email');";
        $resultado = $conexao->query($sql_code) or die("Falha na execução do codigo SQL: ".$conexao->error);

        header("Location:login.html");
        }
    }


}


