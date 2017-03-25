<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link  href="/BST/normalize.css" rel="stylesheet">
		<link  href="/BST/css/bootstrap.css" rel="stylesheet">
		<style type="text/css">
			kbd{
				padding: 5px;
			}
			.show kbd{
				margin: 5px;
			}
		</style>
		<title>Exercicio 2 - PHP Lista</title>

	</head>
	<body>

		<div class="container-fluid col-sm-5"></div>

		<div class="container-fluid col-sm-2">
			<div class="row">

				<form action="ex2.php" method="POST" role="form">
					<center>
					<legend>Ordem Crescente</legend>
					</center>
					<div class="form-group">
						<label for="idNum1"><kbd style="background-color: blue;">Valor 1</kbd></label>
						<input type="number" class="form-control" name="num1" id="idNum1" placeholder="Insira o primeiro valor"><br>
						<label for="idNum2"><kbd style="background-color: red;" >Valor 2</kbd></label>
						<input type="number" class="form-control" name="num2" id="idNum2" placeholder="Insira o segundo valor"><br>
						<label for="idNum3"><kbd style="background-color: green;">Valor 3</kbd></label>
						<input type="number" class="form-control" name="num3" placeholder="Insira o terceiro valor" id="idNum3"><br>
					</div>
					<center>
					<button type="submit" class="btn btn-primary" style="background-color: purple;border-color: purple;" >Apresentar</button><br><hr>
				</form>
					</center>
					<center class="show">
					<?php			

					if (isset($_POST['num1']))
						{
						$n1 = $_POST['num1']; // "<kbd style='background-color: blue;'>$n1</kbd>"
						$n2 = $_POST['num2']; // "<kbd style='background-color: red;'>$n2</kbd>"
						$n3 = $_POST['num3']; // "<kbd style='background-color: green;'>$n3</kbd>"
						$maior = 0;
						$menor = 0;
						$meio = 0;
						if ($n1 >= $n2 && $n1 >= $n3)
							{
							$maior = "<kbd style='background-color: blue;'>$n1</kbd>";
							if ($n2 <= $n3)
								{
								$menor = "<kbd style='background-color: red;'>$n2</kbd>";
								$meio = "<kbd style='background-color: green;'>$n3</kbd>";
								}
							  else
								{
								$menor = "<kbd style='background-color: green;'>$n3</kbd>";
								$meio = "<kbd style='background-color: red;'>$n2</kbd>";
								}
							}

						if ($n2 >= $n1 && $n2 >= $n3)
							{
							$maior = "<kbd style='background-color: red;'>$n2</kbd>";
							if ($n1 <= $n3)
								{
								$menor = "<kbd style='background-color: blue;'>$n1</kbd>";
								$meio = "<kbd style='background-color: green;'>$n3</kbd>";
								}
							  else
								{
								$menor = "<kbd style='background-color: green;'>$n3</kbd>";
								$meio = "<kbd style='background-color: blue;'>$n1</kbd>";
								}
							}

						if ($n3 >= $n1 && $n3 >= $n2)
							{
							$maior = "<kbd style='background-color: green;'>$n3</kbd>";
							if ($n2 <= $n1)
								{
								$menor = "<kbd style='background-color: red;'>$n2</kbd>";
								$meio = "<kbd style='background-color: blue;'>$n1</kbd>";
								}
							  else
								{
								$menor = "<kbd style='background-color: blue;'>$n1</kbd>";
								$meio = "<kbd style='background-color: red;'>$n2</kbd>";
								}
							}

						echo $menor . " " . $meio . " " . $maior;
						}
					?>
					</center>
					</div>	
				</div>
				<div class="container-fluid col-sm-5"></div>
		</div>
		<script src="/BST/jquery.js"></script>
		<script src="/BST/js/bootstrap.js"></script>
	</body>
</html>