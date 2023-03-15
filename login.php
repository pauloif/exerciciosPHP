<!DOCTYPE html>

<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<style>
		body {
			position:relative;
 			left:40%;
  			top:10em;
			width:200px;
			height:400px;
		}

	</style>
</head>
<body>

	<h1>Login</h1>
	<fieldset>
		<form method="POST" action="">
			<label>Email:</label>
			<input type="email" name="email" required>
			<br><br>

			<label>Senha:</label>
			<input type="password" name="senha" required>
			<br><br>

			<input type="submit" name="login" value="Entrar">
		</form>
	</fieldset>

	<?php

	# 04 - Crie um pequeno sistema de login, onde seja possível o usuário entrar com um email e uma senha. Retorne quando o usuário errar o email ou a senha. Quando o login for correto, retorne a mensagem "Login bem sucedido". (3 esc)

		# Receber dados e verificar o valor da variável
		if (isset($_POST["login"])) { 
			$email = $_POST["email"];
			$senha = $_POST["senha"];

		# Comparar os dados recebidos
			if ($email == "pessoa@email.com" && $senha == "12345") {
				echo "<br><p style='color: blue'>Login bem sucedido</p>";
			} else {
				echo "<br><p style='color: red'>Email ou senha incorretos</p>";
			}
		}
	?>

</body>
</html>
