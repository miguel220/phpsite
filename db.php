<?php
    error_reporting(0);
    $pdo = new PDO('mysql:host=localhost;dbname=sitetutorias', 'root', '');
    $connect = mysqli_connect("localhost", "root","") OR DIE("Falha ao conectar ao servidor");
    $db = mysqli_select_db($connect, "sitetutorias") OR die("Falha ao conectar ao banco de dados");
?>