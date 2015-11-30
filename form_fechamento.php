<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Fechamento | Grejanin Express</title>
</head>
<body>

<?php include_once 'topo.php';?>

	<div class="container">

		<form method="post" action="BO/Frete/fechamento.php">
			<h3>Fechamento</h3>
			<hr>

			<!-- Campo Data Inicial-->
			<div class="row">
				<div class="col-md-2">
					<div class="form-group">
						<label for="dt_inicial">Data Inicial:</label>
						<input class="form-control" data-format="dd/mm/yyyy" type="date" name="dt_inicial" required="required">
					</div>
				</div>
			</div>
			<!-- Campo Data Inicial-->

			<!-- Campo Data Final -->
			<div class="row">
				<div class="col-md-2">
					<div class="form-group">
						<label for="dt_final">Data Final:</label>
						<input class="form-control" data-format="dd/mm/yyyy" type="date" name="dt_final" required="required" >
					</div>
				</div>
			</div>
			<!-- Campo Data Final -->

			<!-- Botão pesquisar -->
			<button type="submit" class="btn btn-success">Pesquisar</button>
			<!-- Botão pesquisar -->

		</form>
	</div>
	<!-- Footer -->
	<?php include_once 'rodape.php';?>
<!-- /Footer -->


</body>
</html>
