<?php 
require_once("verifica_usuario_logado.php");

echo "Bem Vindo ".$_SESSION["usuario_logado"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>
<body>
<ul>
    <li><a href="form_cliente.php">Cadastrar Cliente</a></li>
    <li><a href="listar_cliente.php">Listar Cliente</a></li>
    <li><a href=""></a></li>
    <li><a href=""></a></li>
    <li><a href=""></a></li>
</ul>
</body>
</html>


