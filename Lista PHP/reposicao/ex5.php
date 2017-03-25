<!DOCTYPE html>
<html>
	<head>
		<link  href="/BST/normalize.css" rel="stylesheet">
		<link  href="/BST/css/bootstrap.css" rel="stylesheet">
		<title></title>
	</head>
	<body>
		<div class="container">
			<div class="col-sm-4 col-sm-offset-4">
				<form action="" method="POST" class="form-inline" role="form">
				<legend>Sequência Fibonacci</legend>
					<div class="form-group">
						<label class="sr-only" for="n">Número</label>
						<input type="number" class="form-control" id="n" name="num1" placeholder="Insira um valor">
					</div>
					
					<button type="submit" class="btn btn-warning">Calcular</button>
				</form>
				<?php
				$n = $_POST['num1'];
				$a = 0;
				$b = 1;
				$c = 1;
				echo "<pre>";
					for ($i= 1; $i < $n; $i++) { 
					$c = $a + $b;
					$a = $b;
					$b = $c;
					echo "$c, ";
					}
				echo "</pre>";
				?>
			</div>
		</div>
		<br>
		<hr>
		<br>
		<center>
		<a class="btn btn-danger" href="ex6.php">Próximo</a>
		</center>
	</body>
</html>