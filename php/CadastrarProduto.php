<?php
include("conexao.php");
include("protect.php");

if (isset($_POST["NomeProduto"]) && isset($_POST["Quantidade"])) {

    $produto = $conexao->real_escape_string($_POST["NomeProduto"]);
    $quantidade = $conexao->real_escape_string($_POST["Quantidade"]);
    $estoque = $_SESSION["estoque"];

   
    $sql_code = "INSERT INTO produto (prod_nome,prod_qtd,prod_estoque,prod_inserted_at) VALUES ('$produto','$quantidade','$estoque',CURRENT_TIMESTAMP());";

    if (mysqli_query($conexao,$sql_code)){
        if(mysqli_affected_rows($conexao)>0){
            header("Location: ../html/ADICIONAR_ESTOQUE.PHP");
        }
    }else{
        echo "EROOOO";
    }

} 
else{
    ECHO $_POST["NomeProduto"],$_POST["Quantidade"] ;
}