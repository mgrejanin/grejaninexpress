<?php

// require_once ("/home/mgrejanin1/public_html/grejaninexpress/Conexao/Conexao.php");
require_once __DIR__.'/../Conexao/conexao.php';

class DestinoDAO {
	
	private function __construct() {
		//
	}
	
	public static function inserirDestino($dadosDestino) {
		try {
			$query = "INSERT INTO `TB_GE_DESTINO`(`nm_destino`, `ds_sigla`, `ds_obs`) 
			VALUES (?, ?, ?)";
						
			$p_query = Conexao::getConn ()->prepare ( $query );
			$p_query->bindValue ( 1, $dadosDestino['nm_destino']);
			$p_query->bindValue ( 2, strtoupper($dadosDestino['ds_sigla']));
			$p_query->bindValue ( 3, isset($dadosOrigem['ds_obs']) ? $dadosOrigem['ds_obs'] : '');
			return $p_query->execute ();
		} catch ( Exception $e ) {
			print "Ocorreu um erro ao tentar executar esta aзгo, foi gerado um LOG do mesmo, tente novamente mais tarde." . $e->getMessage();
			header("Location:../../cadastrarDestino.php?action=error");
		}
	}
	
// 	public static function atualizarParceiro($dadosParceiro) {
// 		try {
// 			$query = "UPDATE t_r7_parceiros set nm_parceiro = ?, ds_editoria = ?, ck_itemDeMenu = ?, ds_itemDeMenu = ?, ck_snippet = ?, ds_snippet = ? , ds_buscas = ? WHERE cd_parceiro = ?";
// 			$p_query = Conexao::getConn ()->prepare ( $query );
// 			$p_query->bindValue ( 1, $dadosParceiro['nm_parceiro'] );
// 			$p_query->bindValue ( 2, $dadosParceiro['ds_editoria'] );
// 			$p_query->bindValue ( 3,  isset($dadosParceiro['ck_itemDeMenu']) ? '1' : '0' );
// 			$p_query->bindValue ( 4,  isset($dadosParceiro['ck_itemDeMenu']) ? $dadosParceiro['ds_itemDeMenu'] : '');
// 			$p_query->bindValue ( 5, isset($dadosParceiro['ck_snippet']) ? '1' : '0');
// 			$p_query->bindValue ( 6, isset($dadosParceiro['ck_snippet']) ? $dadosParceiro['ds_snippet'] : '' );
// 			$p_query->bindValue ( 7, isset($dadosParceiro['ds_buscas']) ? '1' : 0);
// 			$p_query->bindValue ( 8, $dadosParceiro['cd_parceiro']);
// 			return $p_query->execute ();
// 		} catch ( Exception $e ) {
// 			print "Ocorreu um erro ao tentar executar esta aпїЅпїЅo, foi gerado um LOG do mesmo, tente novamente mais tarde.";
// 			GeraLog::getInstance ()->inserirLog ( "Erro: CпїЅdigo: " . $e->getCode () . " Mensagem: " . $e->getMessage () );
// 		}
// 	}
	
// 	public static function deletarDestino($cod_funcionario) {
// 		try {
// 			$query = "DELETE FROM TB_GE_FUNCIONARIO WHERE cod_funcionario = ?";	
// 			$p_query = Conexao::getConn() ->prepare ( $query );
// 			$p_query->bindValue ( 1,$cod_funcionario , PDO::PARAM_STR);
// 			return $p_query->execute ();
// 		} catch ( Exception $e ) {
// 			print "Ocorreu um erro ao tentar executar esta aГ§ao, foi gerado um LOG do mesmo, tente novamente mais tarde." . $e->getMessage();
// 		}
// 	}
	
	
	public static function buscarDestinos(){
		try {
			$query = "SELECT * FROM TB_GE_DESTINO ORDER BY nm_destino DESC";
			$p_query = Conexao::getConn() ->prepare ( $query );
			$p_query->execute ();
			while ($res = $p_query->fetch ( PDO::FETCH_ASSOC )) { 
				$reg[] = $res;  
			}
			return $reg;
		} catch (PDOException $e) {
			echo "Erro: " . $e->getMessage();
		}
	}
	
// 	public static function buscarParceiro($nm_parceiro) {
// 		try {
// 			$query = "SELECT * FROM t_r7_parceiros WHERE nm_parceiro RLIKE ? ORDER BY nm_parceiro ASC ";
// 			$p_query = Conexao::getConn() ->prepare ( $query );
// 			$p_query->bindValue ( 1,("^" . $nm_parceiro . "[~]*") , PDO::PARAM_STR);
// 			$p_query->execute ();
// 			$res = $p_query->fetchAll( PDO::FETCH_ASSOC );			
// 			return $res;				
// 		} catch (PDOException $e) {
// 			echo "Erro: " . $e->getMessage();
// 		}
// 	}
	
// 	public static function buscarCodParceiro($cd_parceiro) {
// 		try {
// 			$query = "SELECT * FROM t_r7_parceiros WHERE  cd_parceiro RLIKE ? ORDER BY nm_parceiro ASC ";
// 			$p_query = Conexao::getConn() ->prepare ( $query );
// 			$p_query->bindValue ( 1, $cd_parceiro, PDO::PARAM_STR);
// 			$p_query->execute ();
// 			$res = $p_query->fetch( PDO::FETCH_ASSOC );
// 			return $res;
// 		} catch (PDOException $e) {
// 			echo "Erro: " . $e->getMessage();
// 		}
// 	}
	

}
?>