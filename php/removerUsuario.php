<?php
include("conexao.php");
include("protect.php");

$id_usuario = $_POST['id'];
$id_estoque = $_SESSION['estoque'];

$sql = "DELETE FROM filiado where fil_id_usuario = $id_usuario and fil_estoq = $id_estoque";


if (mysqli_query($conexao, $sql)){
    if(mysqli_affected_rows($conexao) > 0) {
        header("Location: ../html/usuario.php");
    }
    else{
        echo "$result";
    }
}