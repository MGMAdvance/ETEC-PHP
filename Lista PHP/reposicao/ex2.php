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
				<div class="row">
					<form method="POST" role="form">
						<legend>Calcular sequência</legend>
						<div class="form-group">
							<label for="inicio">1º Valor</label>
							<input type="number" class="form-control" id="inicio" name="inicio" placeholder="Valor inicial para o calcular">
						</div>
						<div class="form-group">
							<label for="final">2º Valor</label>
							<input type="number" class="form-control" id="final" name="final" placeholder="Valor para parar o calculo">
						</div>
						<div class="form-group">
							<select name="tipo" class="form-control">
								<option value="1">Crescente</option>
								<option value="2">Decrescente</option>
							</select></div>
						</div><br>
						<p class="bg-info" style="padding: 4px;">Caso queira inverter os valores fique a vontade</p>
						
						<button type="submit" class="btn btn-primary">Calcular</button>
					</form>
					<br><hr><br>
					
					
						<?php
						$n1 = $_POST['inicio'];
						$n2 = $_POST['final'];
						$tipo = $_POST['tipo'];
						echo "<pre>";
						switch($tipo){
						case "1":
						while ($n1 < $n2) {
						echo $n1." | ";
						$n1++;
						}
						while ($n2 < $n1) {
						echo $n2." | ";
						$n2++;
						}
						break;
						case "2";
						while ($n1 > $n2) {
						echo $n1." | ";
						$n1--;
						}
						while ($n2 > $n1) {
						echo $n2." | ";
						$n2--;
						}
						break;
						}
						echo "</pre>";
						?>
					
					<br>
				<hr>
				<br>
				<center>
				<a class="btn btn-danger" href="ex3.php">Próximo</a>
				</center>
				</div>
			</div>
		</div>
	</body>
	
</html>