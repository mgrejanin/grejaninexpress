<?php

include_once '../../Model/FretesDAO.php';

if ($_SERVER['REQUEST_METHOD'] == "GET"){
	if (FretesDAO::deletarFrete($_GET['cod_frete'])){
		header("Location:../../fretes.php");
	} else {
		echo "deu ruim";
		exit();
	}
}