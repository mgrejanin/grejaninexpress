<?php
include_once ("/home/mgrejanin1/public_html/grejaninexpress/Model/ColaboradorDAO.php");
("/home/mgrejanin1/public_html/grejaninexpress/Conexao/Conexao.php");
if ($_SERVER['REQUEST_METHOD'] == "POST"){
	if (ColaboradorDAO::inserirColaborador($_POST)){
		header("Location:../../fretes.php");
	}
} else  {
	echo "deu ruim";
}
