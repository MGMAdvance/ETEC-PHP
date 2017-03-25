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
		<form  method="POST" class="form" role="form">
	<legend>Tabuada</legend>
			<div class="form-group">
				<label for="n">Base:</label>
				<input type="number" class="form-control" id="n" name="n" placeholder="Insira o valor">
			</div>
			<div class="form-group">
				<label for="i">Multiplicador:</label>
				<input type="number" class="form-control" id="i" name="i" value="10" placeholder="Insira por quanto ele irá multiplicar">
			</div>
			
			<button type="submit" class="btn btn-success">Calcular</button>
		</form><br><hr><br>
		<div class="panel panel-default">
			<div class="table-responsive">
				<table class="table table-striped">
					<tr>
						<th>Multiplicação</th>
						<th>Resultado</th>
					</tr>
					<?php
					$n = $_POST['n'];
					$a = $_POST['i'];
					
					for($i = 1; $i <= $a; $i++)
					{
					echo "<tr><td>$n x $i</td><td>".($n*$i)."</td></tr>";
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
		<a class="btn btn-danger" href="ex5.php">Próximo</a>
		</center>
	</body>
</html>