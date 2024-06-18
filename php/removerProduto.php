<?php
include ("conexao.php");
include ("protect.php");

if ((isset($_POST["id"])) && isset($_SESSION["estoque"])){

    $prod_id = $conexao->real_escape_string($_POST["id"]);
    $prod_estoque = $_SESSION["estoque"];

    $sql_code = "DELETE FROM produto where prod_id = $prod_id and prod_estoque = $prod_estoque;";

     
    if (mysqli_query($conexao, $sql_code)){
        if(mysqli_affected_rows($conexao) > 0) {
            header("Location: ../html/Ver Estoque.php");
        }
        else{
            echo "erro";
        }
    }


}
else{

}

?>