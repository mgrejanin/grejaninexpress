<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cadastro de Colaborador | Grejanin Express</title>
</head>
<body>

<?php include_once 'topo.php';?>

	<div class="container">
		<h3>Cadastro de Colaborador</h3>
		<hr>
		
		<form action="BO/Colaborador/insert.php" method="post">
			<!-- Campo nome -->
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label for="nm_colaborador">Nome:</label>
						<input type="text" class="form-control" name="nm_colaborador" id="nm_colaborador" placeholder="Nome do Colaborador" required="required">
					</div>
				</div>
			</div>
			<!-- ./Campo nome -->
	
			<!-- Campo email -->
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label for="ds_email">Email:</label>
						<input type="email" class="form-control" name="ds_email" id="ds_email" placeholder="Email do Colaborador">
					</div>
				</div>
			</div>
			<!-- ./Campo email -->
			
			<!-- Campo carro -->
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label for="ds_carro">Carro:</label>
						<input type="text" class="form-control" name="ds_carro" id="ds_carro" placeholder="Carro do Colaborador">
					</div>
				</div>
			</div>
			<!-- ./Campo carro -->
			
			<!-- Campo Tamanho do carro -->
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<div class="form-group">
							<label for="ds_tamanho_carro">Tamanho do caro:</label>
							<input type="text" class="form-control" name="ds_tamanho_carro" id="ds_tamanho_carro" placeholder="Tamanho do Carro">
						</div>
					</div>
				</div>
			</div>
			<!-- ./Campo Tamanho do carro -->
			
			<button type="submit" class="btn btn-success">Cadastrar</button>
		</form>
		
		<?php 
			if (isset($_GET['action'])):?>
			
			<br>
			<div class="row">
				<div class="col-md-4">
				
					<?php if ($_GET['action'] == "error"){ ?>
						<div class="alert alert-danger alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<strong>Erro ao cadastrar colaborador!</strong>
						</div>
					<?php } elseif ($_GET['action'] == "success"){ ?>
						<div class="alert alert-success alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<strong>Colaborador cadastrado com sucesso!</strong>
						</div>
					<?php } ?>
				</div>
			</div>			
		<?php endif;?>

		<!-- Footer -->
		<?php include_once 'rodape.php';?>
		<!-- /Footer -->

	</div>

</body>
</html>
