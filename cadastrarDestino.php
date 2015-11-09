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
<body style="background-color: #EBEBEB">

<?php include_once 'topo.php';?>
	
	<div class="container" style="margin-left: 50%">
		<form action="">
			<div class="row">
				<div class="col-md-2">
					<div class="form-group">
					
						<div class='input-group date' id='datetimepicker1'>
							<input type='date' class="form-control" /> <span
								class="input-group-addon"> <span
								class="glyphicon glyphicon-calendar"></span>
							</span>
						</div>
					</div>
				</div>
				<script type="text/javascript">
		            $(function () {
		                $('#datetimepicker1').datetimepicker();
		            });
		        </script>
			</div>
		</form>
	</div>

	<!-- Footer -->
	<?php include_once 'rodape.php';?>
	<!-- /Footer -->

</body>
</html>
