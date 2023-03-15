<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Números da sorte</title>
	<style>
		table {
			border-collapse: collapse;
		}

		td {
			border: 1px solid black;
			padding: 10px;
		}
	</style>
</head>
<body>

	<h1>Seu 6 números da sorte estão aqui!</h1>

	<table>
		<tr>
			<?php
				$numeros = array();

				while (count($numeros) < 6) {
					$numero = rand(1, 60);

					if (!in_array($numero, $numeros)) {
						$numeros[] = $numero;
					}
				}

				($numeros);

				foreach ($numeros as $numero) {
					echo "<td>$numero</td>";
				}
			?>
		</tr>
	</table>

</body>
</html>
