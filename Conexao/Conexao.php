<?php
// Conectando ao banco

class Conexao{

// 	private static $dsn = "mysql:host=mysql01.mgrejanin1.hospedagemdesites.ws;port=3306;dbname=mgrejanin1;";
	private static $dsn = "mysql:host=localhost;dbname=grejaninexpress;";
// 	private static $user = "mgrejanin1";
// 	private static $pass = "Oliveira123";
		private static $user = "root";
		private static $pass = "";
	
	function __construct(){
		//
	}
	
	public static function getConn(){
		try {
			$conn = new PDO(self::$dsn, self::$user, self::$pass);
			$conn -> setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			return $conn;
		} catch (PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
		}
	}
}
// Fim Conexao com banco