<?php
include_once '../../Model/FretesDAO.php';
if ($_SERVER['REQUEST_METHOD'] == "POST"){
	if (FretesDAO::inserirFrete($_POST)){
		header("Location:../../fretes.php");
	}
} else  {
		echo "deu ruim";
}
