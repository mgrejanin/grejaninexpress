<?php
/*
 * Arquivo para validação de login de usuário
 */
include_once '../../Model/UsuarioDAO.php';
if ($_SERVER ['REQUEST_METHOD'] == "POST") {
	if (UsuarioDAO::ValidarLogin ( $_POST ['ds_email'], $_POST ['ds_senha'] )) {
		header ( "Location:../../inicio.php" );
	} else {
		header ( "Location:../../index.php" );		
	}
} else {
	header ( "Location:../../index.php" );
}
?>