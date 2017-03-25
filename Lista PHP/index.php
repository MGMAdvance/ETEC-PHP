<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link  href="/BST/normalize.css" rel="stylesheet">
		<link  href="/BST/css/bootstrap.css" rel="stylesheet">
		<link  href="/BST/css/pre.css" rel="stylesheet">
		<style type="text/css">
			.kd {
				border-radius: 0px;
			}
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
			background: rgba(0,253,255,1);
			-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5);
			}
			::-webkit-scrollbar-thumb:window-inactive {
			background: rgba(0,253,255,1)
			}
		</style>
		<title>Lista de Atividades - PHP</title>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				
				<nav class="navbar navbar-inverse kd" role="navigation">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Alternar navegação</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">PHP</a>
						</div>
						
						<!-- menus do navbar -->
						<div class="collapse navbar-collapse navbar-ex1-collapse">
							<ul class="nav navbar-nav">
								<li class="active"><a href="prin.php" target="rush">Inicio</a></li>
							</ul>
							<ul class="nav navbar-nav">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Lista 01<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="lista01/ex1.php" target="rush">Maior de 3 números</a></li>
										<li><a href="lista01/ex2.php" target="rush">Maior de 3 números em ordem crescente</a></li>
										<li><a href="lista01/ex3.php" target="rush">Hipotenusa</a></li>
										<li><a href="lista01/ex4.php" target="rush">IMC</a></li>
										<li><a href="lista01/ex5.php" target="rush">Nota do Aluno</a></li>
										<li><a href="lista01/ex6.php" target="rush">Agenda</a></li>
										<li><a href="lista01/ex7.php" target="rush">Calculo</a></li>
									</ul>
								</li>
							</ul>
							<ul class="nav navbar-nav">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Reposição<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="reposicao/ex1.php" target="rush">Tipos de Triangulos</a></li>
										<li><a href="reposicao/ex2.php" target="rush">Calculo de sequência</a></li>
										<li><a href="reposicao/ex3.php" target="rush">Par ou ímpar</a></li>
										<li><a href="reposicao/ex4.php" target="rush">Tabuada</a></li>
										<li><a href="reposicao/ex5.php" target="rush">Sequência Fibonacci</a></li>
										<li><a href="reposicao/ex6.php" target="rush">Salário Minimo</a></li>
										<li><a href="reposicao/ex7.php" target="rush">Multiplo de 10</a></li>
									</ul>
								</li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div>
					</nav>
				</div>
			</div>
			<center>
			<div class="container-fluid">
				<div class="row">
					<iframe  style="max-width:100%;width:100%;height:720px;" frameborder="0" name="rush" src="prin.php" >Este navegador não é compativel</iframe>
				</div>
			</div>
			</center>
			
			<footer style="text-align: center;">
				<p class="text-center">Criado por <a href="mailto:mgmadvance@hotmail.com"><kbd>Matheus G.</kbd></a> - Nº20 - 2IF3</p>
			</footer>
			
		</div>
		<script src="/BST/jquery.js"></script>
		<script src="/BST/js/bootstrap.js"></script>
	</body>
</html>