<?php
include ("conexao.php");
include ("protect.php");

 if (isset($_POST["estoque"]) || (isset($_SESSION["id"]))){
    
    $_SESSION["estoque"] = $_POST["estoque"];  

    $id_estoq = $_SESSION["estoque"];
    $sql = "SELECT est_desc from estoque where est_id = '$id_estoq'";
    $result = mysqli_query($conexao, $sql);

    $row= mysqli_fetch_assoc($result);
    $_SESSION['nome_estoque']= $row['est_desc'];
    
    header("Location:../html/CadastroEstoque.php");
}
else{
    echo "ERRO";
}
