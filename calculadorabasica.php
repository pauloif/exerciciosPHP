<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculadora</title>
	<style>
		body {
			position:relative;
 			left:35%;
  			top:7em;
			width:400px;
			height:400px;
		}

	</style>
</head>
<body>

	<h1>Calculadora</h1>
	<fieldset>
		<form method="POST" action=""><br>
			<label>Valor 1:</label>
			<input type="number" name="num1" required>
			<br><br>

			<label>Valor 2:</label>
			<input type="number" name="num2" required>
			<br><br>

			<p><i>Obs: Insira o Nº "0" no <b>Valor 2</b> caso queira tirar somente a raiz quadrada!</p></i>
			<br><br>

			<label>Operação:</label>
			<select name="operacao" required>
				<option value="soma">Soma</option>
				<option value="subtracao">Subtração</option>
				<option value="multiplicacao">Multiplicação</option>
				<option value="divisao">Divisão</option>
				<option value="potencia">Potenciação</option>
				<option value="raiz_quadrada">Raiz Quadrada</option>
			</select>
			<br><br>

			<input type="submit" name="calcular" value="Calcular">
		</form>
	</fieldset>

	<?php

	#02 - Crie uma calculadora onde possamos calcular as operações básicas (somar, subtrair, multiplicar e dividir) além de potenciação e raiz quadrada. Use formulários. (2 esc)

		#Receber dados e verificar e comparar os diferentes valores, 
		if (isset($_POST["calcular"])) {
			$num1 = $_POST["num1"];
			$num2 = $_POST["num2"];
			$operacao = $_POST["operacao"];

			switch ($operacao) {
				case "soma":
					$resultado = $num1 + $num2;
					break;
				case "subtracao":
					$resultado = $num1 - $num2;
					break;
				case "multiplicacao":
					$resultado = $num1 * $num2;
					break;
				case "divisao":
					if ($num2 == 0) {
						$resultado = "Erro: divisão por zero";
					} else {
						$resultado = $num1 / $num2;
					}
					break;
				case "potencia":
					$resultado = pow($num1, $num2);
					break;
				case "raiz_quadrada":
					$resultado = sqrt($num1);
					break;
				default:
					$resultado = "Erro: operação inválida";
			}
			echo "<br>O resultado da operação é: " . $resultado;
		}
	?>

</body>
</html>
