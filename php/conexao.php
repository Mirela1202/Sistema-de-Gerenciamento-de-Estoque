<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "easystock";


$conexao= mysqli_connect($hostname,$username,$password,$database);

if (!$conexao){
    die("Erro ao se conectar com o banco de dados: ".mysqli_connect_error());
}
?>