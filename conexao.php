<?php 

require_once("verifica_sessao.php");

$hostname = "localhost";
$database = "exercicios_sql_segunda_lista";
$nome_usuario = "root";
$senha = "";

$conn = mysqli_connect($hostname, $nome_usuario, $senha, $database);

if (!$conn) 
{
    die(mysqli_error());
}
else 
{    
    $_SESSION["conexao"] = $conn;
}