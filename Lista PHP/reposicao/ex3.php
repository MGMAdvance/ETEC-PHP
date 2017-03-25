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
					<legend>Par ou ímpar</legend>
					<div class="form-group">
						<label class="sr-only" for="n">Número</label>
						<input type="number" class="form-control" id="n" name="n" placeholder="Insira o numero">
					</div>
					
					<button type="submit" class="btn btn-primary">Vamos lá!</button>
				</form><br><hr><br>
				<div class="panel panel-default">
					<div class="table-responsive">
						<table class="table table-striped">
							<tr>
								<th>Número</th>
								<th>Par ou Impar</th>
							</tr>
							<?php
								$n = $_POST['n'];
								
								for($k = 0; $k <= $n; $k++)
								{
									if(($k % 2) == 0)
									{
										echo "<tr><td>$k</td><td>Par</td></tr>";
									}
									else
									{
											echo "<tr><td>$k</td><td>Impar</td></tr>";
									}
								}
							?>
						</table>
					</div>
				</div>
			</div>
		</div>
		<br>
		<hr>
		<br>
		<center>
		<a class="btn btn-danger" href="ex4.php">Próximo</a>
		</center>
	</body>
</html>