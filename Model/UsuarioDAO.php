<?php

require_once '../../Conexao/Conexao.php';

class UsuarioDAO {

	private function __construct() {
		//
	}
	
	public static function ValidarLogin($login, $senha) {
	
		try {
			$query = "SELECT *
				FROM TB_GE_USUARIO
 				WHERE ds_email = ? AND ds_senha = ?";
			$conn = Conexao::getConn();
			$p_query =  $conn->prepare ( $query );
			$p_query->bindValue ( 1,$login , PDO::PARAM_STR);
			$p_query->bindValue ( 2,md5($senha) , PDO::PARAM_STR);
			$p_query->execute ();
			$res = $p_query->fetch ( PDO::FETCH_ASSOC);
				
			if (!$res){
				return false;
			} else {
				session_start();
				$_SESSION['user'] = $res['nm_usuario'];
				return true;
			}
		} catch ( PDOException $e ) {
			echo "Erro: C�digo: " . $e->getCode () . " Mensagem: " . $e->getMessage ();
		}
	}
}

