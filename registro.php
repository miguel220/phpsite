<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/styleregistro.css">
  <title>Registro</title>
</head>

<body>
  <div class="container">
    <a class="links" id="paracadastro"></a>

    <div class="content">
      <!--FORMULÁRIO DE CADASTRO-->
      <div id="cadastro">
        <form method="post" action="fnRegistro.php">
          <h1>Cadastro</h1>
          <?php
          if (isset($_GET['response'])) {
            if ($_GET['response'] == "email") {
              echo "<center><h2 style='color:red;'>Email já cadastrado!</h2></center>";
            }
          }
          ?>
          <p>
            <label for="nome_cad">Seu nome</label>
            <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="Luiz Augusto" />
          </p>

          <p>
            <label for="email_cad">Seu e-mail</label>
            <input id="email_cad" name="email_cad" required="required" type="email" placeholder="contato@htmlecsspro.com" />
          </p>

          <p>
            <label for="senha_cad">Sua senha</label>
            <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="1234" />
          </p>

          <p>
            <input type="submit" value="Cadastrar" name="Cadastrar" />
          </p>

          <p class="link">
            Já tem conta?
            <a href="index.php"> Vá para a Dashboard </a>
          </p>
        </form>
      </div>
    </div>
  </div>
</body>

</html>