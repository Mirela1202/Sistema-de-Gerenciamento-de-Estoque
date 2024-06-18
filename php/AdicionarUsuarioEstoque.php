<?php
include("conexao.php");
include("protect.php");

$id_usuario = $_POST['id_novo_usuario'];
$id_estoque = $_SESSION['estoque'];
$id_titular = $_SESSION['id_titular'];

$sql = "INSERT INTO filiado (fil_master,fil_id_usuario,fil_estoq,fil_inserted_at) VALUES ('$id_titular','$id_usuario','$id_estoque',CURRENT_TIMESTAMP())";

if (mysqli_query($conexao, $sql)){
    if(mysqli_affected_rows($conexao) > 0) {
        header("Location: ../html/usuario.php");
    }
    else{
        echo "$result";
    }
}