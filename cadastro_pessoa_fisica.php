<?php

include_once("conexao.php");
include_once("verifica_usuario_logado.php");

if (isset($_POST["salvarPessoaFisica"]))
{
    $conn = $_SESSION["conexao"];

    $idcliente = $_SESSION["idcliente"];
    $cpf = $_POST["cpf"];
    $rg = $_POST["rg"];
    $data_nascimento = $_POST["data_nascimento"];
    
    
    if (($rg == "") || ($cpf == "") || ($data_nascimento == ""))
    {
        ?>
        <script>
            window.location.href = "form_pessoa_fisica.php";
            alert("Você precisa preencher os dados!");

        </script>
        <?php
    }
    else 
    {
        $sql = "INSERT INTO pessoa_fisica (idcliente, cpf, rg, data_nascimento) VALUES ('{$idcliente}', '{$cpf}', '{$rg}', '{$data_nascimento}')";

        $result = mysqli_query($conn, $sql);

        if (mysqli_affected_rows($conn) == 1)
        {
           ?>
            <script>
                alert("Cadastrado!");
            </script>
           <?php 
        }
        else 
        {
            ?>
            <script>
                alert("Erro ao cadastrar!");
            </script>
           <?php 
        }
    }
    
}