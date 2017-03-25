<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link  href="/BST/normalize.css" rel="stylesheet">
		<link  href="/BST/css/bootstrap.css" rel="stylesheet">
		<title>Exercicio 1 - Lista</title>
	</head>
	
	<body>
	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	<!-- para poder centralizar -->
	</div>
		<div class="container col-sm-4">
		
			<!-- formulario para enviar pro php -->
			<form action="ex1.php" method="POST">
				<legend>Exercicio 1 - PHP Lista</legend>
		
				<div class="form-group">
					<label for="">Insira 3 valores</label>
					<input type="number" class="form-control" name="num1" placeholder="Primeiro Valor"><br>
					<input type="number" class="form-control" name="num2" placeholder="Segundo Valor"><br>
					<input type="number" class="form-control" name="num3" placeholder="Terceiro Valor"><br>
				</div>
		
			
		
				<button type="submit" class="btn btn-primary">Mostrar</button><br><hr><br>
			<!-- PHP -->
		
				
				<?php
				$n1 = $_POST['num1'];
				$n2 = $_POST['num2'];
				$n3 = $_POST['num3'];
				
				if (($n1 > $n2) && ($n1 > $n3))
				{
					echo "<p class='bg-success'>O maior valor é $n1</p>";
				}
				if (($n2 > $n1) && ($n2 > $n3))
				{
					echo "<p class='bg-warning'>O maior valor é $n2</p>";
				}
				if (($n3 > $n2) && ($n3 > $n1))
				{
					echo "<p class='bg-info'>O maior valor é $n3</p>";
				}
				?>
				
				
			</form>
		</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	<!-- para poder centralizar -->
	</div>
 		<script src="/BST/jquery.js"></script>
		<script src="/BST/js/bootstrap.js"></script>

	</body>

</html>