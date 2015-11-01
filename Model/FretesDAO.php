<?php

require_once '/../../Conexao/Conexao.php';

class FretesDAO {
	
	private function __construct() {
		//
	}
	
	public static function inserirFrete($dadosFrete) {
		try {
			$query = "INSERT INTO TB_GE_FRETE ( ds_data, nr_wb, vlr_recebido, vlr_pago, ds_obs, cod_origem, cod_destino, cod_colaborador) 
					VALUES ( ?, ?, ?, ?, ?, ?, ?, ?)";
			
			$data = str_replace('/', '-', $dadosFrete['ds_data']);			
			$p_query = Conexao::getConn ()->prepare ( $query );
			$p_query->bindValue ( 1, date("Y-m-d", strtotime($data)));
			$p_query->bindValue ( 2, $dadosFrete['nr_wb']);
			$p_query->bindValue ( 3, $dadosFrete['vlr_Recebido'] );
			$p_query->bindValue ( 4, $dadosFrete['vlr_Pago']);
			$p_query->bindValue ( 5, isset($dadosFrete['obs']) ? $dadosFrete['obs'] : "");
			$p_query->bindValue ( 6, $dadosFrete['cod_origem']);
			$p_query->bindValue ( 7, $dadosFrete['cod_destino']);
			$p_query->bindValue ( 8, $dadosFrete['cod_colaborador']);
			return $p_query->execute ();
		} catch ( Exception $e ) {
			print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde." . $e->getMessage();
		}
	}
	
// 	public static function atualizarFrete($dadosFrete) {
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
// 			print "Ocorreu um erro ao tentar executar esta aï¿½ï¿½o, foi gerado um LOG do mesmo, tente novamente mais tarde.";
// 			GeraLog::getInstance ()->inserirLog ( "Erro: Cï¿½digo: " . $e->getCode () . " Mensagem: " . $e->getMessage () );
// 		}
// 	}
	
	public static function deletarFrete($cod_frete) {
		try {
			$query = "DELETE FROM TB_GE_FRETE WHERE cod_frete = ?";	
			$p_query = Conexao::getConn() ->prepare ( $query );
			$p_query->bindValue ( 1,$cod_frete , PDO::PARAM_STR);
			return $p_query->execute ();
		} catch ( Exception $e ) {
			print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde." . $e->getMessage();
		}
	}
	
	
	public static function listarFretes(){
		try {
			$query = "SELECT * FROM mgrejanin1.v_fretes;";
			
			$p_query = Conexao::getConn() ->prepare ( $query );
			$p_query->execute ();
			while ($res = $p_query->fetch ( PDO::FETCH_ASSOC )) { 
				$reg[] = $res;  
			}
			if (isset($reg)) {
				return $reg;
			} else {
				return null;
			}			
		} catch (PDOException $e) {
			echo "Erro: " . $e->getMessage();
		}
	}
	
	public static function buscarFretes($dt_inicial, $dt_final) {
		try {
			$query = "SELECT * FROM mgrejanin1.v_fretes WHERE ds_data >= ? AND ds_data <= ?";
			$p_query = Conexao::getConn() ->prepare ( $query );
			$p_query->bindValue ( 1, date("Y-m-d", strtotime($dt_inicial)), PDO::PARAM_STR);
			$p_query->bindValue ( 2, date("Y-m-d", strtotime($dt_final)), PDO::PARAM_STR);
			$p_query->execute ();
			while ($res = $p_query->fetch ( PDO::FETCH_ASSOC )) { 
				$reg[] = $res;  
			}
			if (isset($reg)) {
				return $reg;
			} else {
				return null;
			}						
		} catch (PDOException $e) {
			echo "Erro: " . $e->getMessage();
		}
	}
	
}
?>