<?php
include("conexao.php");
include("protect.php");

if (isset($_POST['descricao']) && strlen($_SESSION['id'])>0){
    
    if (strlen($_POST['descricao']) == 0){
        echo "Preencha a descrição do Estoque!";
    }
    else{
        $descricao = $conexao->real_escape_string($_POST['descricao']);
        $idtitular = $conexao->real_escape_string($_SESSION['id']);
        
        $sql_code = "INSERT INTO estoque (est_desc,est_titular,est_criado_em) VALUES ('$descricao','$idtitular',CURRENT_TIMESTAMP())";
        $result_code = $conexao-> query($sql_code) or die ("Falha na execução do codigo SQL:".$conexao->error);
        }

}
else{
    echo "O campo sessionid está em branco < 0";
}
