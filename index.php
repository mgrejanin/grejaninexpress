<?php 

ini_set('default_charset', 'ISO-8859-1');
echo "<pre>";
print_r($_COOKIE);

// Verifica se j� est� logado
if (isset($_SESSION['user'])) {
	header("Location:inicio.php");
}

// Verifica se h� sess�o salva
if (isset($_COOKIE['session']) && $_COOKIE['session'] == 1){
	echo "<pre>";
	print_r($_COOKIE);
	exit();
	$_SESSION['user'] = $_COOKIE['user'];
	header("Location:inicio.php");
}

// Verifica se h� algum parametro no header GET-action
if(!isset($_SESSION))
{	
	session_start();	
}

if (isset ( $_GET ['action'] )) {
	if ($_GET ['action'] == 'sair') {
		// Remove o nome do usu�rio do array session e destrui��o a sess�o
		$_SESSION ['user'] = null;
		unset($_COOKIE['session']);
		unset($_COOKIE['user']);	
		echo "<pre>";
	print_r($_COOKIE);
	exit();
		session_destroy ();
	} 
	
	if ($_GET ['action'] == 'wrongLogin'){
// 		Usu�rio ou senha inv�lidos 
		echo "<script>alert('Usu�rio ou senha inv�lidos!');</script>";
	}
	
	if ($_GET ['action'] == 'login') {
		// Usu�rio ou senha inv�lidos
		echo "<script>alert('Voc� precisa fazer login para acessar essa p�gina!');</script>";
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
    <!-- Formul�rio Bootstrap-->
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
	        	<input type="checkbox" value="1" name="session">
	        	Mantenha-me conectado
        	</label>
        </div>
        
        <!-- Bot�o Enviar -->
        <button type="submit" class="btn btn-lg btn-primary btn-block">Logar</button>
        <!-- ./Bot�o Enviar -->
        
    </form>
    <!-- ./Formul�rio Bootstrap-->    
</div>
</body>
</html>
