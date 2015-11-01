<?php
/*
 * Arquivo para validação de login de usuário
 */
$teste= __DIR__ .'/../../Model/UsuarioDAO.php';
echo $teste;
exit();

// include_once $teste;

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