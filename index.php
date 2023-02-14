<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso Ao Sistema</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <form action="login.php" method="POST">
        <div class="wrapper fadeInDown">
            <div id="formContent">
            <div class="fadeIn first">
                <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
            </div>

                <!-- Login Form -->
                <form action="login.php" method="POST">
                    <input type="text" class="fadeIn second" name="nome_usuario" placeholder="login">
                    <input type="password"  class="fadeIn third" name="senha" placeholder="password">
                    <input type="submit" class="fadeIn fourth" name="acessar" value="Acessar">
                </form>
            </div>
        </div>
    </form>
</body>
</html>