<?php 

include_once("conexao.php");
include_once("verifica_usuario_logado.php");

if (isset($_POST["salvarCliente"]))
{
    $conn = $_SESSION["conexao"];

    $nome_cliente = $_POST["nome_cliente"];

    if ($nome_cliente == "")
    {
        ?>
        <script>
            window.location.href = "form_cliente.php";
            alert("Você precisa preencher o nome para cadastro!");

        </script>
        <?php
    }
    else 
    {
        $sql = "INSERT INTO CLIENTE (nome_cliente) VALUES ('{$nome_cliente}')";

        $result = mysqli_query($conn, $sql);

        if (mysqli_affected_rows($conn) == 1)
        {
            $idcliente = mysqli_insert_id($conn);
            var_dump($idcliente);
        }
        
    }
}