<!DOCTYPE html><html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Nota do Aluno</title>
		<link  href="/BST/normalize.css" rel="stylesheet">
		<link  href="/BST/css/bootstrap.css" rel="stylesheet">
		<style>
		/* incluindo estilo na barra de rolagem */
		::-webkit-scrollbar {
		width: 4px;
		}
		::-webkit-scrollbar-track {
		-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
		-webkit-border-radius: 10px;
		border-radius: 0px;
		}
		::-webkit-scrollbar-thumb {
		-webkit-border-radius: 10px;
		border-radius: 0px;
		background: rgba(255,0,0,1);
		-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5);
		}
		::-webkit-scrollbar-thumb:window-inactive {
		background: rgba(255,0,0,1);
		}
		</style>
	</head>
	<body>
		<div class="container"/>
			
			<div class="col-sm-4 col-sm-offset-4">
				<form method="POST">
					<div class="form-group">
						<legend>Nota do Aluno</legend>
						<label for="aluno">Nome do aluno:</label><br>
						<input type="text" class="form-control" id="aluno" name="aluno"><br>
						
						<label for="n1">Primeira Nota:</label>
						<input type="number" class="form-control" id="n1" name="num1"><br>
						<label for="n2">Segunda Nota:</label>
						<input type="number" class="form-control" id="n2" name="num2"><br>
						
						<label for="n3">Terceira Nota:</label>
						<input type="number" class="form-control" id="n3" name="num3"><br>
						
						<label for="n4">Quarta Nota:</label>
						<input type="number" class="form-control" id="n4" name="num4"><br>
						
						<label for="n5">Quinta Nota:</label>
						<input type="number" class="form-control" id="n5" name="num5"><br>
						<center>
						<input class="btn btn-danger" type="submit" value="Media"></div>
						</center>
					</form>
					<br>
					<hr><br>
					<?php
					
					$nome = $_POST['aluno'];
					$n1 = $_POST['num1'];
					$n2 = $_POST['num2'];
					$n3 = $_POST['num3'];
					$n4 = $_POST['num4'];
					$n5 = $_POST['num5'];
					
					$media = ($n1+$n2+$n3+$n4+$n5) / 5;
					
					switch ($media){
					case ($media < 5):
					echo "Média foi de: "."<b>$media</b>".", "."<kbd>$nome</kbd>"." ficou retido";
					break;
					case (($media >= 5) && ($media <= 7)):
					echo "Média foi de: "."<b>$media</b>".", "."<kbd>$nome</kbd>"." ficou em recuperação";
					break;
					default:
					echo "Média foi de: "."<b>$media</b>".", "."<kbd>$nome</kbd>"." foi aprovado";
					}
					?>
					<script src="/BST/jquery.js"></script>
					<script src="/BST/js/bootstrap.js"></script>
				</body>
			</html>