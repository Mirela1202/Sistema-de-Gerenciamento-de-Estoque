<?php
include("conexao.php");
include("protect.php");


if (isset($_POST['descricao']) || isset($_SESSION['id'])){
    
    if (strlen($_POST['descricao']) == 0){
        echo "Preencha a descrição do Estoque!";
    }

    if(strlen($_SESSION['id']) == 0){
        echo "Session_ID NULL";
    }
    else{
        $descricao = $conexao->real_escape_string($_POST['descricao']);
        $idtitular = $conexao->real_escape_string($_SESSION['id']);
        
        $sql_code = "INSERT INTO estoque (est_desc,est_titular,est_criado_em) VALUES ('$descricao','$idtitular',CURRENT_TIMESTAMP())";
        $result_code = $conexao-> query($sql_code) or die ("Falha na execução do codigo SQL:".$conexao->error);

        header("Location: ../html/CadastroEstoque.php");
        }

}
else{
    echo $_SESSION['id'] and $_POST['descricao'];
    
}
