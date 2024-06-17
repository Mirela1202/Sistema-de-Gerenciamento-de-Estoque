<?php
include("conexao.php");
include("protect.php");

$id_usuario = $_POST['id_usuario'];
$id_estoque = $_SESSION['estoque']
$sql = "DELETE FROM filiado where fil_id_usuario = "