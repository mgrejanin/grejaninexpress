<?php
/*
 * Arquivo para valida��o de login de usu�rio
 */
include_once __DIR__ .'../../Model/UsuarioDAO.php';

if ($_SERVER ['REQUEST_METHOD'] == "POST") {
	if (UsuarioDAO::ValidarLogin ( $_POST ['ds_email'], $_POST ['ds_senha'] )) {
		header ( "Location:../../inicio.php" );
	} else {
		echo "noft"	;
	}
} else {
	header ( "Location:../../index.php" );
}
?>