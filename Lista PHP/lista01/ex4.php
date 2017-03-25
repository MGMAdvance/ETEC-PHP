<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link  href="/BST/normalize.css" rel="stylesheet">
		<link  href="/BST/css/bootstrap.css" rel="stylesheet">
		<title>IMC</title>

		
	</head>
	<body>
		<div class="container"/>
			<div class="row">
				<div class="col-sm-4 col-sm-offset-4">
					<h3 class="text-center">Calculo IMC</h3></br>
					</br>
					<center>
					<a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Mostrar Tabela</a>
					<div class="modal fade" id="modal-id">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title">Tabela de IMC</h4>
								</div>
								<br>
								<p>Lembrando que a diferença entra ambos os sexos.</p>
								<div class="modal-body">
									<table class="table table-striped table-bordered">
										<tr>
											<th>Classificação</th>
											<th>IMC</th>
										</tr>
										<tr>
											<td>Abaixo do Peso</td>
											<td>Abaixo de 18,5</td>
											
										</tr>
										<tr>
											<td>Peso Normal</td>
											<td>18,5 - 29,4</td>
										</tr>
										<tr>
											<td>Sobrepeso</td>
											<td>24,9 - 29,9</td>
										</tr>
										<tr>
											<td>Obesidade Grau I</td>
											<td>30 - 34,9</td>
										</tr>
										<tr>
											<td>Obesidade grau II</td>
											<td>35 - 39,9</td>
										</tr>
										<tr>
											<td>Obesidade Grau III ou mórbida</td>
											<td>Maior ou igual a 40</td>
										</tr>
									</table>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
								</div>
							</div>
						</div>
					</div>
					</center>
					<br>
					
					
					<form method="POST" action="ex4.php">
						<div>
							<div class="form-group">
								<p class="p1">Peso em Kg:</p>
								<input class="form-control" type="text" placeholder="Insira o seu peso" name="peso"><br></div>
								<div class="form-group">
									<p class="p2">Altura em Metros:</p>
									<input class="form-control" type="text" placeholder="Insira a sua altura" name="altura"><br></div>
									<div>
										
										<center>
										<div class="panel panel-default">
											
											<input type="radio" name="sexo" value="m" id="m"><label for="m">&nbspMasculino</label>&nbsp &nbsp &nbsp &nbsp
											<input type="radio" name="sexo" value="f" id="f"><label for="f">&nbspFeminino</label></div>
										<br></div>
										</center>
										<center>
										<input class="btn btn-info" type="submit" name="IMC">
										</center>
									</div>
									<div><br><hr><br>
										
										<?php
										
										$sexo = $_POST['sexo'];
										$peso = $_POST['peso'];
										$altura = $_POST['altura'];
										
										$imc = $peso / ($altura * $altura);
										
										if($sexo == "f"){
										if($imc <= 21.9){
										echo "<p class='bg-info'>Baixo peso = IMC abaixo de ".round($imc,2)." kg/m2</p>";
										}
										else if(($imc >= 22)&& ($imc <= 27)){
										echo "<p class='bg-success'>Peso normal = IMC entre ".round($imc,2)." kg/m2</p>";
										}
										else if(($imc >= 27.1) && ($imc <= 32)){
										echo "<p class='bg-warning'>Sobrepeso = IMC entre  ".round($imc,2)." kg/m2</p>";
										}
										else if(($imc >= 32.1) && ($imc<=37)){
										echo "<p class='bg-danger'>Obesidade 1º grau = IMC entre ".round($imc,2)." kg/m2</p>";
										}
										else if(($imc >= 37.1) && ($imc <= 41.9)){
										echo "<p class='bg-danger'>Obesidade 2º grau = IMC entre ".round($imc,2)." kg/m2</p>";
										}
										else if($imc >= 42){
										echo "<p class='bg-danger'>Obesidade 3º grau (obesidade mórbida) = IMC maior que ".round($imc,2)." kg/m2</p>";
										}
										}
										if($sexo == 'm'){
										if($imc <= 21.9){
										echo "Baixo peso = IMC abaixo de ".round($imc,2)." kg/m2";
										}
										else if(($imc >= 22)&& ($imc <= 27)){
										echo "<p class='bg-success'>Peso normal = IMC entre ".round($imc,2)." kg/m2</p>";
										}
										else if(($imc >= 27.1) && ($imc <= 30)){
										echo "<p class='bg-warning'>Sobrepeso = IMC entre  ".round($imc,2)." kg/m2</p>";
										}
										else if(($imc >= 32.1) && ($imc<=35)){
										echo "<p class='bg-danger'>Obesidade 1º grau = IMC entre ".round($imc,2)." kg/m2</p>";
										}
										else if(($imc >= 35.1) && ($imc <= 39.9)){
										echo "<p class='bg-danger'>Obesidade 2º grau = IMC entre ".round($imc,2)." kg/m2</p>";
										}
										else if($imc >= 40){
										echo "<p class='bg-danger'>Obesidade 3º grau (obesidade mórbida) = IMC maior que ".round($imc,2)." kg/m2</p>";
										}
										}
										
										?>
										
									</form>
									</br>
									
								</div>
							</div>
							<br>
							<script src="/BST/jquery.js"></script>
							<script src="/BST/js/bootstrap.js"></script>
						</body>
					</html>