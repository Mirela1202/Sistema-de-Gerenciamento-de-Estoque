<?php
    include("conexao.php");
    include("protect.php");
    echo "teste";

        $id_prod = $conexao->real_escape_string($_POST["id"]);  
        $qtd_prod = $conexao->real_escape_string($_POST["qtd"]);
        $prod_estoque = $_SESSION["estoque"];

        $sql_code = "UPDATE produto SET prod_qtd = '$qtd_prod' where prod_id = '$id_prod' and prod_estoque = '$prod_estoque';";
        
        $resultado = $conexao->query($sql_code) or die("Falha na execução do codigo SQL: ".$conexao->error);
        header("Location:../html/Ver Estoque.php");

