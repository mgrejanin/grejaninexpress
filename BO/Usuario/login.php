<?php
/*
 * Arquivo para validação de login de usuário
 */
include_once ("home/mgrejanin1/public_html/grejaninexpress/Model/UsuarioDAO.php");

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