<?php
include("db.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
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
        <a href="http://localhost/phpsite/registro.php" class="btn btn-primary">Cadastro</a>     
        <a href="http://localhost/phpsite/login.php" class="btn btn-primary">Faça Login</a>      
        <a href="http://localhost/phpsite/listaUser.php" class="btn btn-primary">Listagem de Usuarios</a>
        
    </center>
</body>

</html>