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
					<legend>Multiplo de 10</legend>
					<div class="form-group">
						<label class="sr-only" for="n">Número</label>
						<input type="number" class="form-control" id="n" name="num1" placeholder="Insira um valor">
					</div>
					
					<button type="submit" class="btn btn-warning">Calcular</button>
				</form><br>
				<div class="panel panel-default">
					<div class="table-responsive">
						<table class="table table-striped">
							<tr>
								<th>Número</th>
								<th>Multiplo de 10</th>
							</tr>
							<?php
							$n = $_POST['num1'];
							while ($n <= 100) {
								if(($n % 10) == 0){
									echo "<tr><td class='success'>$n</td><td class='success'>Sim</td></tr>";
								}
								else{
									echo "<tr><td class='danger'>$n</td><td class='danger'>Não</td></tr>";
								}
								$n++;
							}
							?>
						</table>
					</div>
				</div>
			</div>
		</div>
		
	</body>
</html>