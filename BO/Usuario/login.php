<?php
/*
 * Arquivo para validação de login de usuário
 */

echo "<pre>";
print_r($_POST);

include_once ("/home/mgrejanin1/public_html/grejaninexpress/Model/UsuarioDAO.php");
// include_once '../../Model/UsuarioDAO.php';

if ($_SERVER ['REQUEST_METHOD'] == "POST") {
// 	Valida preenchimento de campo email
	if (!isset($_POST['ds_email']) || $_POST['ds_email'] == "") {
		throw new Exception("Digite seu e-mail");
	} 
	
// 	Valida preenchimento de campo senha
	if (!isset($_POST['ds_senha']) || $_POST['ds_senha'] == ""){
		throw new Exception("Digite sua senha");
	} 
	
// 	Chama método login
	if (UsuarioDAO::ValidarLogin ( $_POST ['ds_email'], $_POST ['ds_senha'] )) {
		if (isset($_POST['session']) && $_POST['session'] == 1) {
			setcookie("session", true);
			setcookie("user" , $_SESSION['user']);
			print_r($_COOKIE);
			exit();
		}
		header ( "Location:../../inicio.php" );
	} else {
		header ( "Location:../../inicio.php?action=wrongLogin" );
	}	
} else {
	header ( "Location:../../index.php?action=login" );
}


?>