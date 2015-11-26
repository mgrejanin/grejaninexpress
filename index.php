<?php 

ini_set('default_charset', 'ISO-8859-1');

// Verifica se já está logado
if (isset($_SESSION['user'])) {
	header("Location:inicio.php");
}

// Verifica se há algum parametro no header GET-action
if(!isset($_SESSION))
{	
	session_start();	
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
<body style="background-color: #FFFFFF">
<div class="container">
    <!-- Formulário Bootstrap-->
    <form class="form-signin" method="post" action="BO/Usuario/login.php">
 
    	<img class="form-signin-heading" alt="logo" src="/home/mgrejanin1/public_html/grejaninexpress/images/logo.jpg" style="width: 300px">
    	<h4 class="form-signin-heading">Faça login para acessar o sistema</h4>
    	
        <!-- Campo Email -->
        <div class="input-group-lg">
            <label for="ds_email" class="sr-only">Email</label>
            <input class="form-control" type="email" name="ds_email" id="ds_email" required="required" autofocus="autofocus" placeholder="Digite seu e-mail">
         </div>
        <!-- ./Campo Email -->
        
        <!-- Campo senha -->
            <label for="ds_senha" class="sr-only">Senha</label>
            <input class="form-control" type="password" name="ds_senha" id="ds_senha" required="" placeholder="Digite sua senha">
        <!-- ./Campo senha -->
        
        <!-- Botão Enviar -->
        <button type="submit" class="btn btn-lg btn-primary btn-block">Logar</button>
        <!-- ./Botão Enviar -->
        
         <?php 
			if (isset($_GET['action'])):?>
			
			<br>
			<div class="row">
				<div class="col-md-12">
				
			<?php if ($_GET['action'] == "wrongLogin"){ ?>
					<div class="alert alert-danger alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<strong>Usuário ou senha inválidos!</strong>
					</div>
			<?php } elseif ($_GET['action'] == "login"){ ?>
					<div class="alert alert-warning alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<strong>Você precisa estar logado para acessar esta página!</strong>
					</div>
			<?php } 
				
					if ($_GET ['action'] == 'sair') {
						// Remove o nome do usuário do array session e destruição a sessão
						$_SESSION ['user'] = null;
						session_destroy ();
					}
			?>
				</div>
			</div>			
			<?php endif;?>
        
    </form>
    <!-- ./Formulário Bootstrap-->    
    
   	<!-- Footer -->
	<?php include_once 'rodape.php';?>
	<!-- /Footer -->
</div>
</body>
</html>
