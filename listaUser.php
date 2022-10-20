<?php
include 'db.php';

$resultado_usuarios = mysqli_query($connect, "SELECT * FROM users");
while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)) {
    $id[] = $row_usuario['ID'];
    $nome_user[] = $row_usuario['nome'];
    $email_user[] = $row_usuario['email'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/modal.css">

    <title>Listagem</title>

</head>

<body>

    <div class="bg-modal">
        <div class="modal-content">
            <div class="close" onclick="fnModalClose()">+</div>
            <form action="">
                <input type="text" name="" id="modalNome" placeholder="Nome">
                <input type="text" name="" id="modalEmail" placeholder="E-Mail">
                <input type="hidden" name="" id="modalID" placeholder="E-Mail">
                <a href="" class="btn btn-primary">Alterar</a>
                <a href="" id="Manter" class="btn btn-danger" onclick="fnModalClose()">Manter</a>
            </form>
        </div>
    </div>

    <center><a href="http://localhost/phpsite/index.php" class="btn btn-primary">Home</a></center>
    <table class="table caption-top">
        <caption>List of users</caption>
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col"></th>
            </tr>
        </thead>

        <tbody>
            <?php for ($i = 0; $i < count($nome_user); $i++) : ?>
                <tr>
                    <td><?= $nome_user[$i]; ?></td>
                    <td><?= $email_user[$i]; ?></td>
                    <td>
                        <a id="Editar" class="btn btn-primary" type="submit" name="Editar" onclick="fnModal(<?= $id[$i];?>,'<?=$nome_user[$i] ?>','<?=$email_user[$i];?>' )">Editar</a>
                        <a class="btn btn-danger" type="submit" name="Excluir">Excluir</a>
                    </td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>


    <script type="text/javascript" src="./js/modal.js"></script>
</body>

</html>