<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cadastro de Frete | Grejanin Express</title>
<link rel="stylesheet"
	href="formoid_files/formoid1/formoid-solid-dark.css" type="text/css" />
<script type="text/javascript"
	src="formoid_files/formoid1/jquery.min.js"></script>

<!-- Bootstrap core CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>
<body class="blurBg-false" style="background-color: #FFFFFF">

<?php include_once 'topo.php';?>


<!-- Start Formoid form-->
	<form class="formoid-solid-dark"
		style="background-color: #ffffff; font-size: 14px; font-family: 'Roboto', Arial, Helvetica, sans-serif; color: #34495E; max-width: 480px; min-width: 150px"
		method="post" action="BO/Frete/insert.php">
		<div class="title">
			<h2>Cadastro de Frete</h2>
		</div>

		<!-- Campo Data -->
		<div class="element-date">
			<label class="title"> <span class="required">*</span>
			</label>
			<div class="item-cont">
				<input class="large" data-format="dd/mm/yyyy" type="date"
					name="ds_data" required="required" placeholder="Data" /><span
					class="icon-place"></span>
			</div>
		</div>
		<!-- Campo Data -->


		<!-- Campo Funcionário -->
		<div class="element-select">
			<label class="title"> <span class="required">*</span>
			</label>
			<div class="item-cont">
				<div class="large">
					<span> <select name="cod_colaborador" required="required">
					<?php
					include_once 'Model/ColaboradorDAO.php';
					$colaboradores = ColaboradorDAO::buscarColaboradores ();
					foreach ( $colaboradores as $colaborador ) :
						?>
							<option value="<?php echo $colaborador['cod_colaborador'] ?>"><?php echo $colaborador['nm_colaborador'] ?></option>
					<?php endforeach; ?>
					</select> <span class="icon-place"></span>
					</span>
				</div>
			</div>
		</div>
		<!-- Campo Funcionário -->


		<!-- campo WB -->
		<div class="element-input">
			<label class="title"> <span class="required">*</span>
			</label>
			<div class="item-cont">
				<input class="large" type="text" name="nr_wb" required="required"
					placeholder="WB" /> <span class="icon-place"></span>
			</div>
		</div>
		<!-- campo WB -->


		<!-- Campo Origem -->
		<div class="element-select">
			<label class="title"> <span class="required">*</span>
			</label>
			<div class="item-cont">
				<div class="large">
					<span> <select name="cod_origem" required="required">
						<?php
						include_once 'Model/OrigemDAO.php';
						$origens = OrigemDAO::buscarOrigens ();
						foreach ( $origens as $origem ) :
							?>
							<option value="<?php echo $origem['cod_origem'] ?>"><?php echo $origem['nm_origem'] ?></option>
					<?php endforeach; ?>
					</select> <span class="icon-place"></span>
					</span>
				</div>
			</div>
		</div>
		<!-- Campo Origem -->


		<!-- Campo Destino -->
		<div class="element-select">
			<label class="title"> <span class="required">*</span>
			</label>
			<div class="item-cont">
				<div class="large">
					<span> <select name="cod_destino" required="required">
						<?php
						include_once 'Model/DestinoDAO.php';
						$destinos = DestinoDAO::buscarDestinos ();
						foreach ( $destinos as $destino ) :
							?>
							<option value="<?php echo $destino['cod_destino'] ?>"><?php echo $destino['nm_destino'] ?></option>
					<?php endforeach; ?>
					</select> <span class="icon-place"></span>
					</span>
				</div>
			</div>
		</div>
		<!-- Campo Destino -->

		<!-- Campo Valor Recebido -->
		<div class="element-input">
			<label class="title"> <span class="required">*</span>
			</label>
			<div class="item-cont">
				<input class="large" type="text" name="vlr_Recebido"
					required="required" placeholder="Valor Recebido" /> <span
					class="icon-place"></span>
			</div>
		</div>
		<!-- Campo Valor Recebido -->

		<!-- Campo Valor Pago -->
		<div class="element-input">
			<label class="title"> <span class="required">*</span>
			</label>
			<div class="item-cont">
				<input class="large" type="text" name="vlr_Pago" required="required"
					placeholder="Valor Pago" /> <span class="icon-place"></span>
			</div>
		</div>
		<!-- Campo Valor Pago -->

		<!-- Campo Observações -->
		<div class="element-textarea">
			<label class="title"></label>
			<div class="item-cont">
				<textarea class="medium" name="obs" cols="20" rows="1"
					placeholder="Observaçoes"></textarea>
				<span class="icon-place"></span>
			</div>
		</div>
		<!-- Campo Observações -->

		<!-- Botão Cadastrar -->
		<div class="submit">
			<input type="submit" value="Cadastrar" />
		</div>
		<!-- Botão Cadastrar -->

	</form>
	<script type="text/javascript"
		src="formoid_files/formoid1/formoid-solid-dark.js"></script>
	<!-- Stop Formoid form-->

	<!-- Footer -->
	<?php include_once 'rodape.php';?>
<!-- /Footer -->


</body>
</html>
