<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculadora de Parcelas</title>
	<style>
		body {
			position:relative;
 			left:35%;
  			top:10px;
			width:400px;
			height:400px;
		}

		table {
			border-collapse: collapse;
		}

		th, td {
			border: 1px solid black;
			padding: 10px;
		}
	</style>
</head>
<body>

	<h1>Calculadora de Parcelas</h1>
	<fieldset>
		<legend><b>Insira a sua compra!<b></legend><br>
			<form method="post">
				<label for="valor">Valor:</label><br>
				<input type="number" id="valor" name="valor" required><br><br>

				<label for="parcelas">Número de Parcelas:</label><br>
				<input type="number" id="parcelas" name="parcelas" required><br><br>

				<input type="submit" value="Calcular">
			</form>
	</fieldset>

	<br>

	<?php

	# 03 -  Crie um pequeno sistema onde seja possível receber um valor e um numero de parcelas. Também, incremente uma data mensal para que tal parcela seja paga (use apenas o mês). Use formulários para receber os dados e uma tabela para exibir os dados resultantes com as colunas: Data de Vencimento, Número da Parcela, Valor Parcela. (3 esc)

		#Receber os dados inseridos no formulario (ok)
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$valor = $_POST['valor'];
			$parcelas = $_POST['parcelas'];

		#Validar a entrada dos valores (ok)
			if ($valor <= 0 || $parcelas <= 0) {
				echo "<p style='color: red'>Valor e número de parcelas devem ser maiores que zero.</p>";
			} else {

		#Criar a data da parcela (ok)
				$data = new DateTime('now');

		#Inserindo a tabela com as parcelas (ok)
				echo "<table>";
				echo "<tr><th>Data de Vencimento</th><th>Número da Parcela</th><th>Valor Parcela</th></tr>";

				for ($i = 1; $i <= $parcelas; $i++) {
					$data->add(new DateInterval('P1M')); //Adicionando data e formatando a mesma (ok)
					$data_vencimento = $data->format('m/Y');
					$valor_parcela = $valor / $parcelas;

					echo "<tr><td>$data_vencimento</td><td>$i</td><td>R$ " . number_format($valor_parcela, 2, ',', '.') . "</td></tr>";
				}

				echo "</table>";
			}
		}
	?>

</body>
</html>
