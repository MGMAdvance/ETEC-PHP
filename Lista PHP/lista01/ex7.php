<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Select</title>
		<link  href="/BST/normalize.css" rel="stylesheet">
		<link  href="/BST/css/bootstrap.css" rel="stylesheet">
		
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-4">
					
					<form method="POST">
						<div class="form-group">
							<legend>Cálculo geométrico</legend>
							<div class="form-group">
								<label for="a">Valor A (H/L/R):</label>
								<input type="number" name="a" id="a" class="form-control" value="a">
							</div>
							<div class="form-group">
								<label for="b">Valor (B)ase:</label>
								<input type="number" name="b" id="b" class="form-control" value="b">
							</div>
							<div class="form-group">
								<label for="c">Valor segunda (B)ase:</label>
								<input type="number" name="c" id="c" class="form-control" value="c">
							</div>
							<div class="form-group">
								<label>Forma</label>
								<select name="forma" class="form-control">
									<option value="1">Quadrado</option>
									<option value="2">Retângulo</option>
									<option value="3">Triângulo</option>
									<option value="4">Paralelogramo</option>
									<option value="5">Trapézio</option>
									<option value="6">Círculo</option>
								</select></div>
								<input type="submit" class="btn btn-danger" name="Calcular">
							</div>
						</div>
					</div>
				</form>
				<br>
				<div class="container">
					<div class="col-sm-4 col-sm-offset-4">
					<hr>
					<br>
					<center>
					<?php
						
						$forma = $_POST['forma'];
						switch($forma){
							case "1":
								$l = $_POST['a'];
								$a = pow($l, 2);
								echo "<kbd>$a</kbd>";
								break;
							case "2";
								$c = $_POST['a'];
								$d = $_POST['b'];
								$a = ($c*$d);
								echo "<kbd>$a cm²</kbd>";
								break;
							case "3";
								$h = $_POST['a'];
								$b = $_POST['b'];
								$a = ($b*$h)/2;
								echo "<kbd>$a cm²</kbd>";
								break;
							case "4";
								$h = $_POST['a'];
								$b = $_POST['b'];
								$a = ($b*$h);
								echo "<kbd>$a cm²</kbd>";
								break;
							case "5";
								$h = $_POST['a'];
								$b = $_POST['b'];
								$c = $_POST['c'];
								$a = ($b+$c) * $h;
								$a = $a / 2;
								echo "<kbd>$a cm²</kbd>";
								break;
							case "6";
								$r = $_POST['a'];
								$a = (3.14*pow($r,2));
								echo "<kbd>$a cm²</kbd>";
								break;
						}
					?>
					</center>
					
				</div></div>
				<script src="/BST/jquery.js"></script>
				<script src="/BST/js/bootstrap.js"></script>
			</body>
		</html>