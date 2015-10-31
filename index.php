<?php 

ini_set('default_charset', 'ISO-8859-1');

// Verifica se há algum parametro no header GET-action
if(!isset($_SESSION))
{	session_start();
}

if (isset ( $_GET ['action'] )) {
	if ($_GET ['action'] == 'sair') {
		// Remove o nome do usuário do array session e destruição a sessão
		$_SESSION ['user'] = null;
		session_destroy ();
	} elseif ($_GET ['action'] == 'wrongLogin') {
		// Usuário ou senha inválidos

	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login | Grejanin Express</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="login_files/formoid1/formoid-solid-dark.css" type="text/css" />
</head>
<body class="blurBg-true" style="background-color:#FFFFFF;">



<!-- Start Formoid form-->
<script type="text/javascript" src="login_files/formoid1/jquery.min.js"></script>
<form class="formoid-solid-dark" style="margin-top: 10%;background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px;" 
method="post" action="BO/Usuario/login.php">
	<div class="title">
		<h2>Login</h2>
	</div>
	
	<!-- Campo Email -->
	<div class="element-input">
		<label class="title">
			<span class="required">*</span>
		</label>
		<div class="item-cont">
			<input class="large" type="email" name="ds_email" required="required" placeholder="email"/>
			<span class="icon-place"></span>
		</div>
	</div>
	<!-- Campo Email -->
	
	<!-- Campo Senha -->
	<div class="element-password">
		<label class="title">
			<span class="required">*</span>
		</label>
		<div class="item-cont">
			<input class="large" type="password" name="ds_senha" required="required" placeholder="Senha"/>
			<span class="icon-place"></span>
		</div>
	</div>
	<!-- Campo Senha -->
	
	<!-- BotÃ£o Login -->
	<div class="submit">
		<input type="submit" value="Login"/>
	</div>
</form><script type="text/javascript" src="login_files/formoid1/formoid-solid-dark.js"></script>
<!-- Stop Formoid form-->

</body>
</html>
