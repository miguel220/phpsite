<?php
include("db.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Site top</title>
</head>

<body>
    <center>
        <h1>Bem vindo ao site top</h1>
        <?php
        if (isset($_GET['response'])) {
            if ($_GET['response'] == "sucess") {
                echo "<h2>Email cadastrado com Sucesso!</h2>";
            }
        }
        if (isset($_GET['responseLogin'])) {
            if($_GET['responseLogin'] == "sucess"){
                echo "<h2>Bem vindo</h2>";
          }
          
        }
        ?>
        <a href="registro.php">Registrice</a>
        </br>
        <a href="login.php">Faça Login</a>
        <h2>Top</h2>
    </center>
</body>

</html>