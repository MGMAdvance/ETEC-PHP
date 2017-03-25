<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Exercicio 3 - PHP Lista</title>
		<link  href="/BST/normalize.css" rel="stylesheet">
		<link  href="/BST/css/bootstrap.css" rel="stylesheet">

	</head>
	<body>
	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	<!-- para poder centralizar -->
	</div>
		<div class="container-fluid col-sm-4">
			
			<form action="ex3.php" method="POST">
				<legend>Hipotenusa</legend>
			
				<div class="form-group">
					<label for="">Valor de A:</label>
					<input type="number" class="form-control" name="num1" placeholder="Insira o valor de A"><br>
					<label for="">Valor de B:</label>
					<input type="number" class="form-control" name="num2" placeholder="Insira o valor de B">
				</div>
			
				<button type="submit" class="btn btn-danger">Calcular</button>
			</form><br>

			<?php
			$a = $_POST['num1'];
			$b = $_POST['num2'];
			$c = 0;

			$a = pow($a, 2);
			$b = pow($b, 2);
			$r = $a + $b;
			$c = sqrt($r);

			echo "<p class='bg-primary'> $c <p>";

			?>
			
		</div>
	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	<!-- para poder centralizar -->
	</div>

		<script src="/BST/jquery.js"></script>
		<script src="/BST/js/bootstrap.js"></script>
	</body>
</html>