<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cadastro de Destino | Grejanin Express</title>

<!-- Bootstrap core CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="bootstrap/js/jquery-2.1.4.min.js"></script>


</head>
<body>

<?php include_once 'topo.php';?>
	
	<div class="container">
		<h3>Cadastro de Destino</h3>
		<hr>
		<form action="BO/Destino/insert.php" method="post">
		
			<!-- Campo nome -->
			<div class="row">
				<div class="form-group">
					<div class="col-md-4">
						<label for="nm_destino">Nome:</label> 
						<input type="text" name="nm_destino" class="form-control" id="nm_destino" placeholder="Nome do Destino" required="required" >
					</div>
				</div>
			</div>
			<!-- ./Campo nome -->
			
			<br>
			
			<!-- Campo Sigla -->
			<div class="row">
				<div class="form-group">
					<div class="col-md-2">
						<label for="ds_sigla">Sigla:</label> 
						<input type="text" class="form-control" name="ds_sigla" id="ds_sigla" placeholder="Sigla do Destino" required="required">
					</div>
				</div>
			</div>
			<!-- ./Campo Sigla -->
			
			<br>
			
			<!-- Campo Observação -->
			<div class="row">
				<div class="form-group">
					<div class="col-md-4">
						<label for="ds_obs">Observação:</label>
						<textarea class="form-control" rows="3" cols="10" placeholder="Observações sobre o Destino"></textarea>
					</div>
				</div>
			</div>
			<!-- ./Campo Observação -->
			
			<br>
			
			<!-- Botão enviar -->
			<button type="submit" class="btn btn-success">Cadastrar</button>
			<!-- ./Botão enviar -->
			
		</form>		
	</div>

	<!-- Footer -->
	<?php include_once 'rodape.php';?>
	<!-- /Footer -->

</body>
</html>
