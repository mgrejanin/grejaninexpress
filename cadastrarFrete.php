<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cadastro de Frete | Grejanin Express</title>
</head>
<body>
<?php include_once 'topo.php';?>

<div class="container">

	<form method="post" action="BO/Frete/insert.php">
		<h3>Cadastro de Frete</h3>
		<hr>

		<!-- Campo Data -->
		<div class="row">
			<div class="col-md-2">
				<div class="form-group">
					<label for="ds_data">Data:</label>
					<input class="form-control" data-format="dd/mm/yyyy" type="date" name="ds_data" required="required" placeholder="Data" />
				</div>
			</div>
		</div>
		<!-- Campo Data -->

		<!-- Campo Funcionário -->
		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
					<label for="cod_colaborador">Colaborador:</label>
					<select class="form-control">
					<?php
						include_once 'Model/ColaboradorDAO.php';
						$colaboradores = ColaboradorDAO::buscarColaboradores ();
						foreach ( $colaboradores as $colaborador ) : ?>
							<option value="<?php echo $colaborador['cod_colaborador'] ?>"><?php echo $colaborador['nm_colaborador'] ?></option>
						<?php endforeach; ?>
					</select>
				</div>
			</div>
		</div>
		<!-- Campo Funcionário -->

		<!-- campo WB -->
		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
					<label for="nr_wb">Número de WB:</label>
					<input class="form-control" type="text" name="nr_wb" required="required" placeholder="WB" />
				</div>
			</div>
		</div>
		<!-- campo WB -->


		<!-- Campo Origem -->
		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
					<label for="cod_origem">Origem:</label>
					<select class="form-control" name="cod_origem" required="required">
						<?php
						include_once 'Model/OrigemDAO.php';
						$origens = OrigemDAO::buscarOrigens ();
						foreach ( $origens as $origem ) :
							?>
							<option value="<?php echo $origem['cod_origem'] ?>"><?php echo $origem['nm_origem'] ?></option>
					<?php endforeach; ?>
					</select>
				</div>
			</div>
		</div>
		<!-- Campo Origem -->


		<!-- Campo Destino -->
		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
					<label for="cod_destino">Destino:</label>
					<select class="form-control" name="cod_destino" required="required">
						<?php
						include_once 'Model/DestinoDAO.php';
						$destinos = DestinoDAO::buscarDestinos ();
						foreach ( $destinos as $destino ) :
							?>
							<option value="<?php echo $destino['cod_destino'] ?>"><?php echo $destino['nm_destino'] ?></option>
					<?php endforeach; ?>
					</select>
				</div>
			</div>
		</div>
		<!-- Campo Destino -->

		<!-- Campo Valor Recebido -->
		<div class="row">
			<div class="col-md-2">
			<label for="vlr_recebido">Valor recebido:</label>
				<div class="input-group">
					<span class="input-group-addon">R$</span>
					<input class="form-control" type="text" name="vlr_Recebido" required="required" placeholder="Valor Recebido">
				</div>
			</div>
		</div>
		<!-- Campo Valor Recebido -->

		<br>

		<!-- Campo Valor Pago -->
		<div class="row">
			<div class="col-md-2">
				<label for="vlr_pago">Valor pago:</label>
				<div class="input-group">
					<span class="input-group-addon">R$</span>
					<input class="form-control" type="text" name="vlr_Pago" required="required"
						placeholder="Valor Pago" /> <span class="icon-place"></span>
				</div>	
			</div>
		</div>
		<!-- Campo Valor Pago -->
		
		<br>

		<!-- Campo Observações -->
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label for="obs">Observação:</label>
					<textarea class="form-control" name="obs" cols="20" rows="1" placeholder="Observaçoes"></textarea>
				</div>
			</div>
		</div>
		<!-- Campo Observações -->

		<!-- Botão Cadastrar -->
		<button class="btn btn-success">Cadastrar</button>
		<!-- Botão Cadastrar -->

	</form>

	<!-- Footer -->
	<?php include_once 'rodape.php';?>
	<!-- /Footer -->
</div>

</body>
</html>
