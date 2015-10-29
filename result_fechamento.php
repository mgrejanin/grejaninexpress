<?php
include_once 'Model/FretesDAO.php';
if (isset($_GET['dt_inicial']) && isset($_GET['dt_final'])){
	$reg = FretesDAO::buscarFretes($_GET['dt_inicial'], $_GET['dt_final']);
} else {
	echo "Por favor, informe as datas";
}
?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Fretes | Grejanin Express</title>
<link href="bootstrap/css/fretes.css" rel="stylesheet" type="text/css" />

<!-- Bootstrap core CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	
	
	<!-- Tabela Responsiva -->
	<!--[if !IE]><!-->
	<style>
	
	/* 
	Max width before this PARTICULAR table gets nasty
	This query will take effect for any screen smaller than 760px
	and also iPads specifically.
	*/
	@media 
	only screen and (max-width: 760px),
	(min-device-width: 768px) and (max-device-width: 1024px)  {
	
		/* Force table to not be like tables anymore */
		table, thead, tbody, th, td, tr { 
			display: block; 
		}
		
		/* Hide table headers (but not display: none;, for accessibility) */
		thead tr { 
			position: absolute;
			top: -9999px;
			left: -9999px;
		}
		
		tr { border: 1px solid #ccc; }
		
		td { 
			/* Behave  like a "row" */
			border: none;
			border-bottom: 1px solid #eee; 
			position: relative;
			padding-left: 50%; 
		}
		
		td:before { 
			/* Now like a table header */
			position: absolute;
			/* Top/left values mimic padding */
			top: 6px;
			left: 6px;
			width: 45%; 
			padding-right: 10px; 
			white-space: nowrap;
		}
		
		/*
		Label the data
		*/
		td:nth-of-type(1):before { content: "#"; }
		td:nth-of-type(2):before { content: "Funcionário"; }
		td:nth-of-type(3):before { content: "WB"; }
		td:nth-of-type(4):before { content: "Origem"; }
		td:nth-of-type(5):before { content: "Destino"; }
		td:nth-of-type(6):before { content: "Valor Recebido"; }
		td:nth-of-type(7):before { content: "Valor Pago"; }
		td:nth-of-type(8):before { content: "Oberservação"; }
	}
	
	/* Smartphones (portrait and landscape) ----------- */
	@media only screen
	and (min-device-width : 320px)
	and (max-device-width : 480px) {
		body { 
			padding: 0; 
			margin: 0; 
			width: 320px; }
		}
	
	/* iPads (portrait and landscape) ----------- */
	@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
		body { 
			width: 495px; 
		}
	}
	
	</style>
	<!--<![endif]-->
	<!-- Tabela Responsiva -->
	
</head>

<body>	
	<!-- Barra de navegação -->
  	<?php include_once 'topo.php';?>	
	<!-- Barra de navegação -->
	<div class="container">
		<!-- Tabela -->
		<table class="table">
			<!-- Table Header -->
			<thead>
				<tr>
					<th>#</th>
					<th>Data</th>
					<th>Nome do Funcionário</th>
					<th>WB</th>
					<th>Origem</th>
					<th>Destino</th>
					<th>Valor Recebido</th>
					<th>Valor Pago</th>
					<th>Observação</th>
				</tr>
			</thead>
			<!-- Table Header -->
	
			
			<!-- Table Body -->
			<tbody>
				<?php
					if (!isset($reg)){
						;
					} else {
						$cont = 1;
						foreach ( $reg as $dados ) :
				?>
				<tr>
					<td><?php echo $cont++;?></td>
					<td><?php echo date("d/m/Y", strtotime($dados['ds_data']));?></td>
					<td><?php echo $dados['nm_colaborador']?></td>
					<td><?php echo $dados['nr_wb']?></td>
					<td><?php echo $dados['nm_origem']?></td>
					<td><?php echo $dados['nm_destino']?></td>
					<td><?php echo "R$". number_format($dados['vlr_recebido'], 2, ',', '.');?></td>
					<td><?php echo "R$". number_format($dados['vlr_pago'], 2, ',', '.');?></td>
					<td><?php echo isset($dados['ds_obs']) ? $dados['ds_obs'] :  ""?></td>
				</tr>
				<?php endforeach;}?>
			</tbody>
			<!-- Table Body -->
		</table>
		<!-- Tabela -->
	</div>
	<!-- Container -->
	
	<!-- Footer -->
	<?php include_once 'rodape.php';?>
	<!-- /Footer -->	
		
</body>

</html>