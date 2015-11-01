<?php
// Conectando ao banco

class Conexao{

// 	private static $dsn = "mysql:host=localhost;dbname=grejaninexpress;";
// 	private static $user = "root";
// 	private static $pass = "";
	
	private static $dsn = "mysql:host=mysql02.mgrejanin1.hospedagemdesites.ws;port=3306;dbname=mgrejanin1;";
	private static $user = "mgrejanin1";
	private static $pass = "Oliveira123";
	
	
	function __construct(){
		//
	}
	
	public static function getConn(){
		try {
			$conn = new PDO(self::$dsn, self::$user, self::$pass);
			$conn -> setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			echo "Conexao ok";
			exit();
			return $conn;
		} catch (PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
		}
	}
}
// Fim Conexao com banco