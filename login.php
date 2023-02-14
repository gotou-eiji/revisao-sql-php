<?php 

require_once("conexao.php");

if (isset($_POST["acessar"]))
{
    $nome_usuario = $_POST["nome_usuario"];
    $senha = $_POST["senha"];

    if (($nome_usuario == "") || ($senha == ""))
    {
        ?>
        <script>
            window.location.href = "index.php";
            alert("Você precisa preencher usuário e senha para acessar o sistema!");

        </script>
        <?php
       
    }
    else 
    {
        $response = verifica_login($nome_usuario, $senha);

        if ($response["response"])
        {
            while ($nome_usuario = mysqli_fetch_assoc($response["result"]))
            {
                $_SESSION["usuario_logado"] = $nome_usuario["nome_usuario"];                
            }

            header("Location: home.php");
        }
        else 
        {
            ?>
            <script>
                 window.location.href = "index.php";
                alert("Usuário Não Encontrado!");
            </script>
            <?php
        }
    }
}

function verifica_login($nome_usuario, $senha)
{
    $senha = hash("sha256", $senha);

    $sql = "SELECT * FROM usuario WHERE nome_usuario = '{$nome_usuario}' AND senha = '{$senha}'";

    $result = mysqli_query($_SESSION["conexao"], $sql);
   
    $response["result"] = $result;

    $response["response"] = mysqli_num_rows($result) > 0 ? true : false;

    return $response;

}