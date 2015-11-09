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
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css" >
        <link rel="stylesheet" href="bootstrap/css/signin.css" >
</head>
<body>
<div class="container">
    <!-- Formulário Bootstrap-->
    <form class="form-signin" method="post" action="BO/Usuario/login.php">
    
    	<h2 class="form-signin-heading">Login</h2>
    	
        <!-- Campo Email -->
            <label for="ds_email" class="sr-only">Email</label>
            <input class="form-control" type="email" name="ds_email" id="ds_email" required="" autofocus="" placeholder="Digite seu e-mail">
        <!-- ./Campo Email -->
        
        <!-- Campo senha -->
            <label for="ds_senha" class="sr-only">Senha</label>
            <input class="form-control" type="password" name="ds_senha" id="ds_senha" required="" placeholder="Digite sua senha">
        <!-- ./Campo senha -->
        
        <div class="checkbox">
        	<label>	
	        	<input type="checkbox" value="1">
	        	Mantenha-me conectado
        	</label>
        </div>
        
        <!-- Botão Enviar -->
        <button type="submit" class="btn btn-lg btn-primary btn-block">Logar</button>
        <!-- ./Botão Enviar -->
        
    </form>
    <!-- ./Formulário Bootstrap-->
</div>
</body>
</html>
