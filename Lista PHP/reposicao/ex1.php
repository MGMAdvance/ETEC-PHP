<html>
<link  href="/BST/normalize.css" rel="stylesheet">
<link  href="/BST/css/bootstrap.css" rel="stylesheet">
	<body>
		<div class="container">
			<div class="col-sm-4 col-sm-offset-4">
				<p class="bg-warning" style="padding: 4px; text-align: center;">Atividades para sábado</p>
				<form method="POST" role="form">
					<legend>Tipo de Triângulo</legend>
					<div class="form-group">
						<label for="num1">Valor A</label>
						<input type="number" class="form-control" id="num1" name="num1" placeholder="Insira o valor de A">
					</div>
					<div class="form-group">
						<label for="num2">Valor B</label>
						<input type="number" class="form-control" id="num2" name="num2" placeholder="Insira o valor de B">
					</div>
					<div class="form-group">
						<label for="num3">Valor C</label>
						<input type="number" class="form-control" id="num3" name="num3" placeholder="Insira o valor de C">
					</div>
					<button type="submit" class="btn btn-danger">Pronto</button>
				</form>
				<br><hr><br>
				<center>
				<h1>
				<?php
				$n1 = $_POST['num1'];
				$n2 = $_POST['num2'];
				$n3 = $_POST['num3'];
				$resultado = "Escaleno";

				if (($n1 == $n2) && ($n1 == $n3)){
					$resultado = "Equilátero";
				}
				elseif ($n1 == $n2) {
					$resultado = "Isóceles";
				}
				elseif ($n1 == $n3) {
					$resultado = "Isóceles";
				}


				if (($n2 == $n1) && ($n2 == $n3)){
					$resultado = "Equilátero";
				}
				elseif ($n2 == $n1) {
					$resultado = "Isóceles";
				}
				elseif ($n2 == $n3) {
					$resultado = "Isóceles";
				}


				if (($n3 == $n1) && ($n3 == $n2)){
					$resultado = "Equilátero";
				}
				elseif ($n3 == $n1) {
					$resultado = "Isóceles";
				}
				elseif ($n3 == $n2) {
					$resultado = "Isóceles";
				}

				echo $resultado;
				?>
				</h1>
				<br>
				<hr>
				<br>
				<a class="btn btn-danger" href="ex2.php">Próximo</a>
				</center>
			</div>
		</div>

	</body>
</html>