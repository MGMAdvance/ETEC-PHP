<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link  href="/BST/normalize.css" rel="stylesheet">
		<link  href="/BST/css/bootstrap.css" rel="stylesheet">
		<title>Agenda</title>
		
	</head>
	<body>
		<div class="container">
			<div class="col-sm-4 col-sm-offset-4">
				<form method="POST">
					<div class="form-group">
					<legend>Agenda</legend>
						<label>Nome</label><br>
						<input type="text" size="30" class="form-control" name="nome"><br></div>
						<div class="form-group">
							<label>Endereço</label><br>
							<input type="text" size="30" class="form-control" name="endereco"><br></div>
							<div class="form-group">
								<label>Telefone</label><br>
								<input type="number" size="30" class="form-control" name="telefone"><br></div>
								<div class="form-group">
									<div class="form-group">
										<label>Idade</label><br>
										<input type="number" class="form-control" size="4" name="idade"><br>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" style="padding: 0px;">&nbsp<label>Sexo</label></div>
										<div class="panel-body" style="text-align: center;">
											
											<input type="radio" name="sexo" value="m"><label>Masculino</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
											<input type="radio" name="sexo" value="f"><label>Feminino</label><br></div>
										</div></div>
										<center>
										<input type="submit" class="btn btn-default" style="background-color: black; border-color: black; color: white;">
									</form><br><hr><br>
									<?php
										
										
										$nome = $_POST['nome'];
										$endereco = $_POST['endereco'];
										$telefone = $_POST['telefone'];
										$sexo = $_POST['sexo'];
										$idade = $_POST['idade'];
										
										if($idade >= 18){
											echo "<kbd>$nome</kbd>"." é maior de idade";
										}
										else{
											echo "<kbd>$nome</kbd>"." é menor de idade";
										}
									?>
									</center>
								</div>
								<script src="/BST/jquery.js"></script>
								<script src="/BST/js/bootstrap.js"></script>
							</body>
						</html>