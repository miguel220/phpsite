<?php
    include ('db.php');
    $error = "";
    
    if(isset($_POST['Cadastrar'])){
        
        $nome = $_POST['nome_cad'];
        $email = $_POST['email_cad'];
        $senha = hash('sha256', md5($_POST['senha_cad']));
        
        $verify = mysqli_query($connect, "SELECT * FROM users WHERE email = '$email'");

        if(mysqli_num_rows($verify) > 0){
            header("Location: registro.php?response=email");
        }else{
            $sql = $pdo->prepare("INSERT INTO users (nome, email, senha, active) VALUES ('$nome','$email', '$senha', 1)");
            $sql->execute();
            header("Location: index.php?response=sucess");
        }
    }
?>