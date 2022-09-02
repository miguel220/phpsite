<?php
    error_reporting(0);
    $connect = mysqli_connect("localhost", "root","@Miguel012") OR DIE("Falha ao conectar ao servidor");
    $db = mysqli_select_db($connect, "sitetutorias") OR die("Falha ao conectar ao banco de dados");
?>