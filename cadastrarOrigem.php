<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro de Origem | Grejanin Express</title>
	<link rel="stylesheet" href="formoid_files/formoid1/formoid-solid-dark.css" type="text/css" />	
	<script type="text/javascript" src="formoid_files/formoid1/jquery.min.js"></script>
	
	<!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
	 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body class="blurBg-false" style="background-color: #EBEBEB">

<?php include_once 'topo.php';?>

	<!-- Start Formoid form-->	
	<script type="text/javascript"
		src="cadastrarfuncionario_files/formoid1/jquery.min.js"></script>
	<form class="formoid-solid-dark"
		style="background-color: #FFFFFF; font-size: 14px; font-family: 'Roboto', Arial, Helvetica, sans-serif; color: #34495E; max-width: 480px; min-width: 150px"
		action="BO/Origem/insert.php" method="post">
		<div class="title">
			<h2>Cadastro de Origem</h2>
		</div>
		
		 <!-- Nome origem -->
		<div class="element-input">
			<label class="title"><span class="required">*</span></label>
			<div class="item-cont">
				<input class="large" type="text" name="nm_origem" required="required"
					placeholder="Nome" /><span class="icon-place"></span>
			</div>
		</div>
		<!-- Nome origem -->
		
		<!-- Sigla Origem -->
		<div class="element-input">
			<label class="title"><span class="required">*</span></label>
			<div class="item-cont">
				<input class="large" type="text" name="ds_sigla" required="required"
					placeholder="Sigla da Origem" /><span class="icon-place"></span>
			</div>
		</div>
		<!-- Sigla Origem -->
		
		<!-- Observa��o -->
		<div class="element-input">
			<label class="title"></label>
			<div class="item-cont">
				<input class="large" type="text" name="ds_obs"
					placeholder="Observa��o" /><span class="icon-place"></span>
			</div>
		</div>
		<!-- Observa��o -->
		
		<!-- Bot�o Enviar -->
		<div class="submit">
			<input type="submit" value="Cadastrar" />
		</div>
		<!-- Bot�o Enviar -->
		
	</form>
	
	<script type="text/javascript"
		src="cadastrarfuncionario_files/formoid1/formoid-solid-dark.js"></script>
	<!-- Stop Formoid form-->

</body>
</html>