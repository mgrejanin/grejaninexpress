<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Fechamento | Grejanin Express</title>
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
		method="post" action="Controller/Frete/fechamento.php">
		<div class="title">
			<h2>Fechamento</h2>
		</div>

		<!-- Campo Data Inicial-->
		<div class="element-date">
			<label class="title"> <span class="required">*</span>
			</label>
			<div class="item-cont">
				<input class="large" data-format="dd/mm/yyyy" type="date"
					name="dt_inicial" required="required" placeholder="Data inicial:" /><span
					class="icon-place"></span>
			</div>
		</div>
		<!-- Campo Data Inicial-->
		
		<!-- Campo Data Final -->
		<div class="element-date">
			<label class="title"> <span class="required">*</span>
			</label>
			<div class="item-cont">
				<input class="large" data-format="dd/mm/yyyy" type="date"
					name="dt_final" required="required" placeholder="Data Final:" /><span
					class="icon-place"></span>
			</div>
		</div>
		<!-- Campo Data Final -->

		<!-- Botão pesquisar -->
		<div class="submit">
			<input type="submit" value="Gerar Fechamento" />
		</div>
		<!-- Botão pesquisar -->

	</form>
	<script type="text/javascript"
		src="formoid_files/formoid1/formoid-solid-dark.js"></script>
	<!-- Stop Formoid form-->

	<!-- Footer -->
	<?php include_once 'rodape.php';?>
<!-- /Footer -->


</body>
</html>
