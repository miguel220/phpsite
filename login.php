<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/styleregistro.css">
	<title>Login</title>
</head>

<body>
	<div class="container">
		<a class="links" id="paracadastro"></a>
		<a class="links" id="paralogin"></a>

		<div class="content">
			<!--FORMULÁRIO DE LOGIN-->
			<div id="login">
				<form method="post" action="fnLogin.php">
					<h1>Login</h1>

					<?php
					if (isset($_GET['responseLogin'])) {
						if ($_GET['responseLogin'] == "email") {
							echo "<center><h2 style='color:red;'>Email invalido!</h2></center>";
						} elseif ($_GET['responseLogin'] == "senha") {
							echo "<center><h2 style='color:red;'>Senha</h2></center incorreta!</h2></center>";
						}
					}
					?>

					<p>
						<label for="email_login">Seu e-mail</label>
						<input id="email_login" name="email_login" required="required" type="text" placeholder="contato@htmlecsspro.com" />
					</p>

					<p>
						<label for="senha_login">Sua senha</label>
						<input id="senha_login" name="senha_login" required="required" type="password" placeholder="1234" />
					</p>

					<p>
						<input type="checkbox" name="manterlogado" id="manterlogado" value="" />
						<label for="manterlogado">Manter-me logado</label>
					</p>

					<p>
						<input type="submit" value="Logar" name="Logar" />
					</p>

					<p class="link">
						Ainda não tem conta?
						<a href="registro.php">Cadastre-se</a>
					</p>
				</form>
			</div>
		</div>
	</div>
</body>

</html>