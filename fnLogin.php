<?php
    include ('db.php');
    $error = "";

    if(isset($_POST['Logar'])){
        
        $email = $_POST['email_login'];
        $senha = hash('sha256', md5($_POST['senha_login']));
        
        $verify = mysqli_query($connect, "SELECT * FROM users WHERE email = '$email'");
        $verifypass = mysqli_query($connect, "SELECT * FROM users WHERE senha = '$senha'");
        
        if(mysqli_num_rows($verify) <= 0){
            header("Location: login.php?responseLogin=email");
        }elseif(mysqli_num_rows($verifypass) <= 0){
            header("Location: login.php?responseLogin=senha");
        }else{
            header("Location: index.php?responseLogin=sucess");
        }
    }
?>