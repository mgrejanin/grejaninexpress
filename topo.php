<?php

ini_set('default_charset', 'ISO-8859-1');

if(!isset($_SESSION)) { 
	session_start();  
} 

if ($_SESSION ['user'] == null) {
	header ( "Location:index.php" );
}
?>
<!-- Static navbar -->
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					aria-controls="navbar">
					<span class="sr-only">Barra de navegação</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="inicio.php">Grejanin Express</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown" role="button" aria-haspopup="true"
						aria-expanded="false">Cadastros <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="cadastrarFrete.php">Cadastro de Frete</a></li>
							<li><a href="cadastrarColaborador.php">Cadastro de Colaborador</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="cadastrarOrigem.php">Cadastro de Origem</a></li>
							<li><a href="cadastrarDestino.php">Cadastro de Destino</a></li>
						</ul>
					</li>
					<li><a href="fretes.php">Fretes</a></li>
					<li><a href="form_fechamento.php">Fechamento</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a><?php echo $_SESSION['user'] ?></a></li>
					<li class="active"><a href="index.php?action=sair">Sair <span
							class="sr-only">(current)</span></a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</nav>