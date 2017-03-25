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
				<form method="POST" class="form-inline">
					<div class="form-group">
						<label class="sr-only" for="exampleInputAmount">Valor (Em Reais)</label>
						<div class="input-group">
							<div class="input-group-addon">R$</div>
							<input type="number" class="form-control" id="exampleInputAmount" placeholder="Insira um salário min." name="num1">
							<div class="input-group-addon">.00</div>
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Calcular</button>
				</form><br>
				<div class="panel panel-default">
					<div class="table-responsive">
						<table class="table table-striped">
							<tr>
								<th>Salário</th>
								<th>X</th>
							</tr>
							<?php
							$n = $_POST['num1'];
							$z = 1;
							while ($z <= 10) {
								echo "<tr><td>R$\n$n,00</td><td>$z</td></tr>";
								$n = ($n*2);
								$z++;
							}
							?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<hr>
	<br>
	<center>
	<a class="btn btn-danger" href="ex7.php">Próximo</a>
	</center>
</body>
</html>