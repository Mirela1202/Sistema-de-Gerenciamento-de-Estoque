<?php
include("conexao.php");

if (isset($_POST['nome']) || isset($_POST['estoque'])){
    if (strlen($_POST['nome'])==0 ){
        echo "Preencha o nome do produto!"; 
    }
    if (strlen($_post['estoque']) == 0){
        echo "Preencha em qual estoque esse produto vai estar cadastrado!";
    }
}
else{
    $nome = $conexao->real_escape_string($_POST['nome']);
    $qtd = $conexao->real_escape_string($_POST['quantidade']);
    $estoq = $conxao->real_escape_string($_POST['estoque']);
    $usu_id = $conexao->$_SESSION['id'];
    
    if ($qtd = NULL){
   
    }
    else if ($qtd >= 0){
        $sql_code = "INSERT INTO produto (prod_nome,prod_qtd,)";
    }
}