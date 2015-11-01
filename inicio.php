<?php

include_once 'Model/FretesDAO.php';
$res = FretesDAO::listarFretes ();

?>
<html lang="pt-br">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="../../favicon.ico">

<title>Grejanin Express</title>

<!-- Bootstrap core CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

	<?php include_once 'topo.php';?>


	<div class="container">

		<!-- Main component for a primary marketing message or call to action -->
		<div class="jumbotron">
			<h1>Dados:</h1>
			<div class="panel panel-primary">
				<div class="panel-heading">Número de fretes no mês:</div>
				<div class="panel-body"><?php echo count($res)?></div>
			</div>

			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Total Recebido:</h3>
				</div>
				<div class="panel-body"><?php 
					$vlr_recebido = 0;
					foreach ($res as $valor){
						$vlr_recebido += $valor['vlr_recebido'];
					};
					echo "R$". number_format($vlr_recebido, 2, ',', '.');
					?>
				</div>
			</div>
			
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Total Pago:</h3>
				</div>
					<div class="panel-body"><?php 
					$vlr_pago = 0;
					foreach ($res as $valor){
						$vlr_pago += $valor['vlr_pago'];
					};
					echo "R$". number_format($vlr_pago, 2, ',', '.');
					?>
				</div>
			</div>
			
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Total:</h3>
				</div>
					<div class="panel-body"><?php 
					setlocale(LC_ALL, "ptb");
					$lucro = $vlr_recebido-$vlr_pago;
					echo 'R$' . number_format($lucro, 2, ',', '.');?>
				</div>
			</div>
		</div>

	</div>
	<!-- /container -->
	
	<!-- Footer -->
	<?php include_once 'rodape.php';?>
	<!-- /Footer -->


	


</body>
</html>
