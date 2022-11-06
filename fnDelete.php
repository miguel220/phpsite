<?php

if (isset($_GET['Excluir'])) {
    die($_GET['Excluir']);
    $idEdit = $_POST['idEdit'];

    $sql = $pdo->prepare("DELETE FROM users WHERE ID = $idEdit");
    $sql->execute();

    header("refresh: 0");

    // mysqli_query($connect, "DELETE FROM users WHERE ID = $idEdit");
    // header("Location: listaUser.php?response=sucess");
}
?>