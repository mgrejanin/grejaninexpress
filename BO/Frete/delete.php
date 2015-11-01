<?php

include_once ("/home/mgrejanin1/public_html/grejaninexpress/Model/FreteDAO.php");

if ($_SERVER['REQUEST_METHOD'] == "GET"){
	if (FretesDAO::deletarFrete($_GET['cod_frete'])){
		header("Location:../../fretes.php");
	} else {
		echo "deu ruim";
		exit();
	}
}