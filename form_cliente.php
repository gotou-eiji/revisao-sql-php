<?php 

include_once("verifica_usuario_logado.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO DE CLIENTES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="col-md-5">
        <form action="cadastro_cliente.php" method="POST">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome_cliente" class="form-control" placeholder="Preencha o Nome">
            
            </div>
            
            <button type="submit" name="salvarCliente" class="btn btn-primary">Salvar</button>
        </form>
    </div>

    
</body>
</html>

