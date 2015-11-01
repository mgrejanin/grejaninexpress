<?php
include_once __DIR__ .'../../Model/ColaboradorDAO.php';
if ($_SERVER['REQUEST_METHOD'] == "POST"){
	if (ColaboradorDAO::inserirColaborador($_POST)){
		header("Location:../../fretes.php");
	}
} else  {
	echo "deu ruim";
}
