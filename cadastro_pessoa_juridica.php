<?php

include_once("conexao.php");
include_once("verifica_usuario_logado.php");

if (isset($_POST["salvarPessoaJuridica"]))
{
    $conn = $_SESSION["conexao"];

    $idcliente = $_SESSION["idcliente"];
    $cnpj = $_POST["cnpj"];
    $razao_social = $_POST["razao_social"];
    $inscricao_estadual = $_POST["inscricao_estadual"];
    
    
    if (($cnpj == "") || ($razao_social == "") || ($inscricao_estadual == ""))
    {
        ?>
        <script>
            window.location.href = "form_pessoa_juridica.php";
            alert("Você precisa preencher os dados!");

        </script>
        <?php
    }
    else 
    {
        $sql = "INSERT INTO pessoa_juridica (idcliente, cnpj, razao_social, inscricao_estadual) VALUES ('{$idcliente}', '{$cnpj}', '{$razao_social}', '{$inscricao_estadual}')";

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